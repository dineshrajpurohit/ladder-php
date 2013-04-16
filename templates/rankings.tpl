<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Rank #</th>
            <th>Name</th>
            <th>ELO</th>
        </tr>
    </thead>
    {foreach from=$players key=id item=i}
        <tr>
            <td>{$i.rank}</td>
            <td>{$i.fname} {$i.lname}</td>
            <td>{$i.elo}</td>
        </tr>
    {/foreach}

</table>