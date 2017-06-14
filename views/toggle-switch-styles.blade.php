<style>
    .switch-group {
        position: relative;
    }

    .switch-group .switch-label {
        width: auto;
        margin: 0 10px;
        height: 26px;
        position: absolute;
        cursor: pointer;
    }

    .switch-group.input-group .switch-label {
        position: relative;
        font-size: inherit;
        height: inherit;
        line-height: 25px;
        margin: 0 10px 0 0;
        border-radius: 0 0 0 0;
        cursor: inherit;
    }

    .switch-group.input-group label.switch-btn {
        margin-top: 6px;
    }

    .switch-group .switch-action-icon {
        height: 26px;
        position: absolute;
        top: 6px;
        left: 55px;
    }

    .switch {
        display: none;
    }

    .switch + .switch-btn {
        margin: 0;
        outline: 0;
        width: 50px;
        height: 26px;
        position: relative;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background: #ccc;
        border-radius: 2em;
        padding: 2px;
        transition: 0.4s ease;
    }

    .switch + .switch-btn:after, .switch + .switch-btn:before {
        position: relative;
        display: block;
        content: "";
        width: 50%;
        height: 100%;
    }

    .switch + .switch-btn:after {
        left: 0;
        border-radius: 50%;
        background: #fff;
        transition: 0.2s ease;
    }

    .switch + .switch-btn:before {
        display: none;
    }

    .switch:checked + .switch-btn {
        background: #3097D1;
    }

    .switch:checked + .switch-btn:after {
        left: 50%;
    }
</style>