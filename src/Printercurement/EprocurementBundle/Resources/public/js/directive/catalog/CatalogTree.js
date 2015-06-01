eprocurementApp.directive('catalogTree', function (){
    var catalogTreeDirective = this;

    var animationSpeed = 300;

    return {
        restrict: 'A',
        scope: {
            remote: '='
        },
        controller: 'CatalogStructure',
        templateUrl: '/eprocurement/catalogs_structure',
        link: function (scope, element, attrs) {

            if(typeof scope.remote == 'undefined'){
                scope.remote = true;
            }

            //fire loadStructure
            scope.loadCatalogStructure(0).success(function(data) {
                scope.structure = data.catalogsStructure;
            });

            scope.setSelectedNode = function(node) {
                scope.selectedNode = node;
                scope.selectedNodeSpan = $('#tree_node_'+node.node_id);

                scope.selectedNodeUl = scope.selectedNodeSpan.parent().parent();
            }

            //listen for structure and change nodes
            scope.$watch("structure",function(newValue) {
                scope.structure = newValue;
            });


            element.on('click', function(){
                if(scope.remote){
                    if(scope.selectedNode.has_children_nodes && scope.selectedNode.child_nodes.length == 0){
                        var children = [];

                        scope.loadCatalogStructure(scope.selectedNode.node_id).success(function(data){
                            children = data.catalogsStructure;

                            /**
                             * assign nodes, no need to load ajax again and again
                             */
                            scope.selectedNode.child_nodes = children;

                            $.each(children, function( key, child ) {
                                scope.selectedNodeUl.find('ul').append(
                                    '<li>' +
                                        '<label>' +
                                            '<span id="tree_node_'+child.node_id+'" ng-click="setSelectedNode(child)">'+child.catalog.name+'</span>' +
                                        '</label>' +
                                    '</li>'
                                ).show(animationSpeed);
                            });
                        });
                    }else{
                        scope.selectedNodeUl.find('li').toggle(animationSpeed);
                    }
                }else{
                    scope.selectedNodeUl.find('li').toggle(animationSpeed);
                }

            })
        }
    }
});