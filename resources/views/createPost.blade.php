<div>
    <form method="POST" action="/post">
        @csrf
        <label>
            Titulo
            <input id="title">
        </label>

        <label>
            Cuerpo
            <textarea id="body">

            </textarea>

        </label>

        <button type="submit">
            Guardar!

        </button>

    </form>


</div>
