<div>
    
    <h1>Sheet Weight Conversion Calculator<h1>
    
<!-- weight indicator -->

<label> <h2> Weight</h2> </label>


     


<!-- Material Dropdown -->
<form>
       <label> Material
    <select wire:model="material">
        <option value="a" selected>ABS</option>
        <option value="b" selected>Acetal</option>
        <option value="c" selected>Arcrylic</option>
        <option value="d" selected>Arcrylic Mirror</option>
        <option value="e" selected>PETG</option>
        <option value="f" selected>Polycarbonate</option>
        <option value="g" selected>Polypropylene</option>
        <option value="h" selected>Styrene</option>
        <option value="i" selected>Teflon</option>
        <option value="j" selected>PVC Type</option>
        <option value="k" selected>PVC Foam Sheet</option>
        <option value="l" selected>UHMW</option>
    </select>   
</label> 

<!-- integer inputs -->

<label> Length
<input wire:model="length" type="integer" />
</label>

<label> Width
    <input wire:model="width" type="integer" />
    </label>

<label> Thickness
        <input wire:model="thickness" type="integer" />
        </label>


<button type="submit">Calculate</button>

  

</form>
</div>
