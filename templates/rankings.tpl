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
            {if isset($logged_in)}
            <td><a class="btn btn-primary" href="">Challenge</td>
            {/if}
        </tr>
    {/foreach}

</table>