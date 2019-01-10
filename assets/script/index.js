if(document.getElementById("main")) {
    const demo = new Vue({

        el: '#main',

        data: {
            user: {
                errorsLogin: [],
                successLogin:[],
                errorsRegister: [],
                successRegister:[],
                name: null,
                email: null,
                username: null,
                password: null,
            },
            submitData: null,
            active: 'home'
        },

        methods: {
            makeActive: function (item) {
                this.active = item;
            },

            doLogin: function () {

                this.submitData = this.user;

                if(this.user.username !== null && this.user.password !== null){

                    this.user.successLogin.push('Successfully');

                }

                this.user.errorsLogin = [];

                (!this.user.username) ? this.user.errorsLogin.push('Username field') : '';

                (!this.user.password) ? this.user.errorsLogin.push('Password field') : '';

            },

            doRegister: function () {

                this.submitData = this.user;

                if(this.user.name !== null && this.user.email !== null && this.user.username !== null && this.user.password !== null){

                    this.user.successRegister.push('Successfully');

                }

                this.user.errorsRegister = [];

                (!this.user.name) ? this.user.errorsRegister.push('Name field') : '';

                (!this.user.email) ? this.user.errorsRegister.push('Email field') : '';

                (!this.user.username) ? this.user.errorsRegister.push('Username field') : '';

                (!this.user.password) ? this.user.errorsRegister.push('Password field') : '';

            }
        }
    });
}

