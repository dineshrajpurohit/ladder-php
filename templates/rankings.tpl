<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>Rank #</th>
            <th>Name</th>
        </tr>
    </thead>
    {foreach from=$players key=id item=i}
        <tr>
            <td>{$i.rank}</td>
            <td>{$i.fname} {$i.lname}</td>
        </tr>
    {/foreach}

</table>