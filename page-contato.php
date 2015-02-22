<?php
require_once __DIR__ . '/functions/security.php';
get_header();
the_post();
$post_response = apply_filters( 'send_contact_form', false );
?>

<?php if( $post_response ) : ?>
    <div class="alert alert-<?php echo $post_response->status ?>">
        <?php echo $post_response->message ?>
    </div>
<?php endif ?>

<form action="<?php echo get_permalink() ?>" method="post">
    <div>
        <label for="field-name">Nome</label>
        <input type="text" name="field_name" id="field-name" placeholder="Nome" required />
    </div>
    <div>
        <label for="field-email">E-mail</label>
        <input type="email" name="field_email" id="field-email" placeholder="E-mail" required />
    </div>
    <div class="fake-field">
        <label for="field-mail">NÃO preencha esse campo, ou seu e-mail não será enviado</label>
        <input type="email" name="field_mail" id="field-mail" placeholder="NÃO preencha esse campo, ou seu e-mail não será enviado" />
    </div>
    <div>
        <label for="field-subject">Assunto</label>
        <input type="text" name="field_subject" id="field-subject" placeholder="Assunto" class="[ input-text ] contact-form__list-item__input" />
    </div>
    <div>
        <label for="field-message">Mensagem</label>
        <textarea name="field_message" id="field-message" cols="30" rows="10" placeholder="Mensagem"></textarea>
    </div>
    <div>
        <button type="submit">Enviar</button>
    </div>
</form>

<?php get_footer() ?>