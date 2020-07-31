@if (!is_null($interactions))
    <div id="chartdiv" style="height: 800px"></div>
    <!-- Chart code -->
    <script>
    $(document).on('integrationsLoaded', function(event, data) {
        const formatData = (data) => {
            let maxValue = 100;
            const formatDuration = (duration) => {
                const formatUnit = (value) => {
                    if(value < 10) {
                        return `0${value}`;
                    }
                    return value;
                }
                const durationMoment = moment.duration(duration, 'seconds');
                return `${formatUnit(durationMoment.hours())}:${formatUnit(durationMoment.minutes())}:${formatUnit(durationMoment.seconds())}`;
            }
            const formatChildren = (interactions) => {
                return interactions.map(interaction => {
                    // do that to keep the main point as the bigger one
                    if(maxValue < interaction.duration) maxValue = interaction.duration + 1;
                    return {
                        name: interaction.person_name,
                        beaconName: interaction.beacon_name,
                        duration: formatDuration(interaction.duration),
                        value: interaction.duration,
                        tooltip: `${interaction.person_name}\n${interaction.beacon_name}\n${formatDuration(interaction.duration)}`,
                        children: interaction.secondary_interactions.map(secInteraction => {
                            return {
                                name: secInteraction.person_name,
                                beaconName: secInteraction.beacon_name,
                                value: secInteraction.duration,
                                tooltip: `${secInteraction.person_name}\n${secInteraction.beacon_name}\n${formatDuration(secInteraction.duration)}`,
                                duration: formatDuration(secInteraction.duration)
                            }
                        })
                    }
                })
            };

            const children = formatChildren(data.interactions);
            const response = [{
                name: data.person.name,
                job_title: data.person.job_title,
                email: data.person.email,
                beacon_id: data.person.beacon_id,
                value: maxValue,
                fixed: true,
                tooltip: `${data.person.name}\n${data.person.job_title}`,
                children
            }]
            return response;
        }
        am4core.ready(function() {
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end


            var chart = am4core.create("chartdiv", am4plugins_forceDirected.ForceDirectedTree);
            chart.legend = new am4charts.Legend();

            var networkSeries = chart.series.push(new am4plugins_forceDirected.ForceDirectedSeries())

            // Configure icons
            var icon = networkSeries.nodes.template.createChild(am4core.Image);
            icon.href = "{{ asset('public') }}/icon/person.svg";
            icon.horizontalCenter = "middle";
            icon.verticalCenter = "middle";
            icon.width = 40;
            icon.height = 40;


            networkSeries.data = formatData(data);

            networkSeries.dataFields.linkWith = "linkWith";
            networkSeries.dataFields.name = "name";
            networkSeries.dataFields.id = "name";
            networkSeries.dataFields.value = "value";
            networkSeries.dataFields.children = "children";

            networkSeries.nodes.template.tooltipText = "{tooltip}";
            networkSeries.nodes.template.fillOpacity = 1;

            networkSeries.nodes.template.label.text = "{name}"
            networkSeries.nodes.template.label.valign = "bottom";
            networkSeries.nodes.template.label.fill = am4core.color("#000");
            networkSeries.fontSize = 10;
            networkSeries.maxLevels = 2;
            networkSeries.manyBodyStrength = -40;

            networkSeries.nodes.template.label.hideOversized = false;
            networkSeries.nodes.template.label.truncate = true;
            networkSeries.minRadius = am4core.percent(4);
            networkSeries.maxRadius = am4core.percent(4);
            networkSeries.dataFields.fixed = "fixed";
            networkSeries.links.template.strokeWidth = 5;

        }); // end am4core.ready()
    });
    </script>
@endif



@if(!empty($warning))
    <script type="text/javascript" async>
        alert('{{ $warning }}');
    </script>
@endif
