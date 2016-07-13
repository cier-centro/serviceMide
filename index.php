<script type="text/javascript" src="js/angular.js"></script>
<script type="text/javascript" src="js/angular.ng-modules.js"></script>
<script type="text/javascript" src="js/mideUniversidadesController.js"></script>


<div ng-module="mideUniversidades" >
    <div ng-controller="mideUniversidadesController">

        <button id="btnSearch" ng-click="search();">Buscar</button>
        
        <table class="tbUniversities">
            <thead>
                <tr>
                    <th>Puesto</th>
                    <th>Nombre de Institución Educativa</th>
                    <th>Sector</th>
                    <th>Tipo de Institución</th>
                    <th>Acreditación</th>
                </tr>
            
                <tr>
                    <th></th>
                    <th><input ng-model="filters.nameUniversity"></th>
                    <th><input ng-model="filters.sector"></th>
                    <th><input ng-model="filters.typeUniversity"></th>
                    <th><input ng-model="filters.isAccredited"></th>
                </tr>
            </thead>
            
            <tbody>
                <tr ng-repeat="arrayUniversities in universities | filter:filters">
                    <td>{{arrayUniversities.position}}</td>
                    <td>{{arrayUniversities.nameUniversity}}</td>
                    <td>{{arrayUniversities.sector}}</td>
                    <td>{{arrayUniversities.typeUniversity}}</td>
                    <td>{{arrayUniversities.isAccredited}}</td>
                </tr>
            </tbody>
        </table>
    
    </div>
</div>

