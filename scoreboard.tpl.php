<div ng-app="myApp" ng-controller="myController">
<div> 
  <div class= "game-section" ng-repeat="data in myData | customSorter:['state', 'startTimeDisplay'] ">Game Status: {{data.state}} <br>
  	<span class="game-time">Game Time: {{data.startTimeDisplay}} </span>
  	<span ng-show="data.home.score.length" class="score-section"> <span class="score">Score</span><br>{{data.home.name}} {{data.home.score}} {{data.away.name}} {{data.away.score}}</span>
  	<br> <b>Home team:</b> <span class="home-team">{{data.home.name}}</span> Rank: {{data.home.rank}} Record: {{data.home.record}} 
  	<br> <b>Away team:</b> <span class="away-team">{{data.away.name}}</span> Rank: {{data.away.rank}} Record: {{data.away.record}}</div>
</div>
</div>
