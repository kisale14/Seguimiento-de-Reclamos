<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualización de Normas</title>
</head>
<body>

    <style>
    .main-image{
        position: relative;
        background: url("https://d1sud0deeo84nn.cloudfront.net/8PWOTJqDqJXXqAP5HuqP8Fym540UkdDrcSYD8BED.jpg") no-repeat center;
        margin-left: 150px;
        margin-right: 150px;
        margin-top: 50px;
        background-size: cover; 
        height: 500px;
        border-radius: 25px;
        overflow: hidden;
        z-index: 1;
    }

    .container1{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: black;
        font-weight: 700;
        text-transform: uppercase;
    }

    .container1 h1{
        margin: 0;
        font-size: 70px;
    }

    .container1 h1 span{
        border: 6px solid black;
        padding: 6px 14px;
        display: inline-block;
    }

    .contact{
    margin-top: 50px;    
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-bottom: 80px;
}

.contact .contact__figure{
    display: none;
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
    border: 1px solid;
    border-radius: 5px;
    padding: 12px 18px;
    font-size: 14px;
    line-height: 24px;
}

.contact .contact__main .contact__main__form .contact__main__form__field .contact__main__form__field__input.textarea{
    height: 106px;
}

.contact .contact__main .contact__main__form .contact__main__form__submit{
    width: 100%;
    max-width: 200px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 12px;
    background-color: #0B63E5;
    color: #fff;
    border: none;
    border-radius: 7px;
    font-family: var(--title-font);
    font-weight: bold;
    font-size: 14px;
    line-height: 42px;
    cursor: pointer;
    transition: .3s all;
}

.contact .contact__main .contact__main__form .contact__main__form__submit:hover, .contact .contact__main .contact__main__form .contact__main__form__submit:focus{
    transform: scale(1.05);
    background-color: aquamarine;
}

.contact .contact__main .contact__main__form .contact__main__form__submit ion-icon{
    font-size: 20px;
}

.text-danger{
    color: red;
}

.tbl{
            width: 100%;
            border-collapse: collapse;
        }

        .table thead{
            background: #424949;
            color: #fff;
        }

        .tbl thead tr th{
            font-size: 0.9rem;
            padding: 0.8rem;
            letter-spacing: 0.2rem;
            vertical-align: top;
            border: 1px solid #aab7b8;
        }

        .tbl tbody tr td{
            font-size: 1rem;
            letter-spacing: 0.2rem;
            font-weight: normal;
            text-align: normal;
            border: 1px solid #aab7b8;
            padding: 0.8rem;
        }

        .tbl tr:nth-child(even) {
            background: #ccc;
        }

        .tbl tr:hover td{
            background: #839192;
            color: black;
            transition: all 0.3s ease-in;
            cursor: pointer;
        }

        .tbl button{
            display: inline-block;
            border: none;
            margin: 0 auto;
            padding: 0.4rem;
            border-radius: 1px;
            outline: none;
            cursor: pointer;
        }

        .btn_trash{
            background: #e74c3c;
            color: #fff;
        }

        .btn_add{
            background: #0B63E5;
            color: #fff;
        }

        .container{
            max-width: 1440px;
            margin-left: 250px;
            margin-right: 150px;
            margin-top: 50px;
            background: #fff;
            box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
        }

        .container h2{
            padding: 2rem 1rem;
            font-size: 2.5rem;
            text-align: center;
        }
</style>

@include('layouts.nav')


<div class="main-image">
    <div class="container1">
        <h1><span>Sistema de Gestión de Reclamos</span></h1>
    </div>
</div>

<div class="container">
    <div class="tbl_container">
        <h2>Lista de Apartamentos</h2>
        <table class="tbl">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>VIgencia de la Norma</th>
                    <th>Sancion de la Norma</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($normas as $item)
                <tr>
                    <td>{{$item->nombre}}</td>
                    <td>{{$item->vigencia}}</td>
                    <td>{{$item->sancion}}</td>
                    <td>
                        <a href="{{route('normas.destroy', $item->id)}}">
                        <button class="btn_trash"><i class="fa-solid fa-trash"></i></button>
                        </a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
</div>


<section class="contact" id="contact">
    <div class="contact__main">
        <div class="contact__main__description">
            <h2 class="contact__main__description__title">Actualización de Normas</h2>
            <p class="contact__main__description__paragraph">¿Tienes preguntas, ideas o sugerencias? ¡Estamos aquí para escucharte! Déjanos ser tu aliado en el emocionante viaje del desarrollo web.</p>
        </div>
        <form class="contact__main__form" action="{{route('norma.create')}}">
            <div class="contact__main__form__group">
                <div class="contact__main__form__field">
                    <label for="name" class="contact__main__form__field__label">Nombre de la Norma</label>
                    <input type="text" class="contact__main__form__field__input" name="nombre" id="name" placeholder="Nombre de la norma" required autocomplete="name">
                </div>
                @error('nombre')
                <small class="text-danger">{{$message}}</small>
            @enderror

                <div class="contact__main__form__field">
                    <label for="email" class="contact__main__form__field__label">Categoria de la Norma</label>
                    <input type="text" class="contact__main__form__field__input" name="categoria" id="email" placeholder="Categoria" required>
                </div>
            </div>
            @error('categoria')
            <small class="text-danger">{{$message}}</small>
        @enderror

            <div class="contact__main__form__field">
                <label for="subject" class="contact__main__form__field__label">Sanción de la Norma</label>
                <input type="text" class="contact__main__form__field__input" name="sancion" id="subject" placeholder="Sanción" required>
            </div>

            <div class="contact__main__form__field">
                <label for="message" class="contact__main__form__field__label">Contenido de la Norma</label>
                <textarea name="contenido" placeholder="Contenido" class="contact__main__form__field__input textarea" required></textarea>
            </div>

            <div class="contact__main__form__group">
                <div class="contact__main__form__field">
                     <label for="nombre" class="contact__main__form__field__label">Vigencia de la Norma</label>
                    <input type="date" class="contact__main__form__field__input" name="vigencia" placeholder="Ingresar Fecha de Nacimiento" required>
                 </div> 

            <button type="submit" class="contact__main__form__submit">Enviar Mensaje <i class="fa-solid fa-arrow-right"></i></button>
        </form>
    </div>
</section>


<script src="https://kit.fontawesome.com/3e68567d0b.js" crossorigin="anonymous"></script>
</body>
</html>