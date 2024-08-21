<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style> .contact{
        margin-top: 50px;
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 80px;
    }

    .contact .contact__main{
        width: 100%;
        max-width: 500px;
        padding: 30px 20px;
        display: flex;
        flex-direction: column;
        row-gap: 14px;
        background-color: #fff;
        border-radius: 24px;
        box-shadow: 0px 16px 60px rgba(6, 28, 61, 0.2);
    }

    .contact .contact__main .contact__main__description{
        display: flex;
        flex-direction: column;
        row-gap: 10px;
        color: var(--secondary-color);
    }

    .contact .contact__main .contact__main__description .contact__main__description__title{
        font-size: 22px;
        line-height: 32px;
    }

    .contact .contact__main .contact__main__description .contact__main__description__paragraph{
        font-size: 12px;
        line-height: 24px;
        color: #42526B;
    }

    .contact .contact__main .contact__main__form, .contact .contact__main .contact__main__form .contact__main__form__group{
        width: 100%;
        display: flex;
        flex-direction: column;
        gap: 16px;
    }

    .contact .contact__main .contact__main__form .contact__main__form__field{
        display: flex;
        flex-direction: column;
        row-gap: 6px;
    }

    .contact .contact__main .contact__main__form .contact__main__form__field .contact__main__form__field__label{
        font-size: 14px;
        line-height: 20px; 
    }

    .contact .contact__main .contact__main__form .contact__main__form__field .contact__main__form__field__input{
        background-color: #fff;
        border:  1px solid;
        border-radius: 5px;
        padding: 12px 18px;
        font-size: 14px;
    }

    .contact .contact__main .contact__main__form .contact__main__form__submit{
        width: 100%;
        max-width: 200px;
        display: flex;
        justify-content: center;
        justify-content: center;
        align-items: center;
        gap: 12px; 
        background-color: #0B63E5;
        color: #fff;
        border: none;
        border-radius: 7px;
        font-weight: bold;
        font-size: 14px;
        line-height: 42px;
        cursor: pointer;
        transition: .3s all;
    }

    .contact .contact__main .contact__main__form .contact__main__form__submit:focus{
        transition: scale(1.05);
        background-color: aqua;
    }

    .contact .contact__main .contact__main__form .contact__main__form__submit ion-icon{
        font-size: 20px;
    }</style>

    @include('layouts.nav')

    <section class="contact">
        <div class="contact__main">
            <div class="contact__main__description">
                <h3 class="contact__main__description__title">Registrar Usuario</h3>
                <p class="contact__main__description__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                </p>
            </div>
            <form action="{{route('apaxpro.store')}}" class="contact__main__form" method="POST">
                @csrf
                <div class="contact__main__form__group">
                    <div class="contact__main__form__field">
                        <label for="nombre" class="contact__main__form__field__label">Id del apartamento</label>
                        <input type="text" name="apto_id" class="contact__main__form__field__input" value="{{$aptos->id}}" readonly>
                    </div>

                    <div class="contact__main__form__group">
                        <div class="contact__main__form__field">
                            <label for="nombre" class="contact__main__form__field__label">Fecha de compra</label>
                            <input type="date" class="contact__main__form__field__input" name="fecha" placeholder="Ingresar Apellido">
                        </div>

                        <div class="contact__main__form__group">
                            <div class="contact__main__form__field">
                                <label for="nombre" class="contact__main__form__field__label">Número de residentes</label>
                                <input type="number" class="contact__main__form__field__input" name="residentes" placeholder="Ingresar número de residentes">
                        
                            </div>

                        <div class="contact__main__form__group">
                            <div class="contact__main__form__field">
                                 <label for="nombre" class="contact__main__form__field__label">Propietarios</label>
                                <select name="propietario_id" class="contact__main__form__field__input">
                                    @foreach ($propietarios as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                             </div>   

                             <button type="submit" class="contact__main__form__submit">Registrar Apto<i class="fa-solid fa-arrow-right"></i></button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>