<style>
    input,select {
        display: block;
        padding: 10px;
        margin: 10px auto;
        position: relative;
        left: 10px;
        width: 80%;
        border: 1px solid blue;
    }
</style>
@if(session('user'))
<script>alert('success')</script>
@endif
<div style="width: 50%;  padding: 10px; margin: 0 auto;">
    <h1>New Customer </h1>
    <form method="post" >
        {{ csrf_field() }}
        <label ></label>
        <input type="text" name="Age" placeholder="Age" required />

        <label ></label>
        <input type="text" name="Education_Level" placeholder="Education Level" required />

        <label ></label>
        <input type="text" name="Home_Ownership" placeholder="Home Ownership" required />


        <label ></label>
        <input type="text" name="Internet_Connection" placeholder="Internet Connection" required />

         <label ></label>
        <input type="text" name="Buying_Freq" placeholder="Buying Freq" required />

         <label ></label>
        <input type="text" name="Format" placeholder="Format" required />

         <label ></label>
        <input type="text" name="Theater_Freq" placeholder="Theater Freq" required />

        <label ></label>
        <input type="text" name="Marital_Status" placeholder="Marital Status" required />

        <label ></label>
        <input type="text" name="TV_Signal" placeholder="TV Signal" required />

        <label ></label>
        <input type="text" name="PPV_Freq" placeholder="PPV Freq" required />

        <label ></label>
        <input type="text" name="TV_Movie" placeholder="TV Movie" required />

        <label ></label>
        <input type="text" name="Viewing_Freq" placeholder="Viewing Freq" required />

        <label ></label>
        <input type="text" name="Renting_Freq" placeholder="Renting Freq" required />

        <label ></label>
        <input type="text" name="TV_Movie_Freq" placeholder="TV Movie Freq" required />

        <label ></label>
        <input type="number" name="Num_Bathrooms" placeholder="Num Bathrooms" required />

        <label ></label>
        <input type="number" name="Num_Bedrooms" placeholder="Num Bedrooms" required />


        <label ></label>
        <input type="number" name="Num_Children" placeholder="Num Num Children" required />


        <label ></label>
        <input type="number" name="Num_Cars" placeholder="Num Cars" required />

        <label ></label>
        <input type="number" name="Num_TVs" placeholder="Num TVs" required />



        <select name="Gender">
            <option value="Male">Male</option>
            <option value="FeMale">FeMale</option>
        </select>


        <select name="Movie_Selector">
            <option value="Children">Children</option>
            <option value="me">me</option>
            <option value="Other">Other</option>
            <option value="Spouse_Partner">Spouse Partner</option>
        </select>

<input type="submit" value="add">
    </form>
</div>
<script>
    import Label from "@/Jetstream/Label";
    import Input from "@/Jetstream/Input";
    export default {
        components: {Input, Label}
    }
</script>
