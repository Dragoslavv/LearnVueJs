<div v-if="active === 'login'">

    <p><b>{{active}}</b></p>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form  @submit.prevent="doLogin" id="formLogin">
                    <fieldset>
                        <div class="errors mb-5" v-if="user.errorsLogin">
                            <p >If exists error(s)  please correct the following error(s):</p>
                        <ul>
                            <li v-for="error in user.errorsLogin">{{ user.errorsLogin[0] }}</li>
                        </ul>
                        </div>


                        <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" class="form-control" v-model="user.username" type="text" placeholder="Username">
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" v-model="user.password" type="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-secondary btn-sm btn-block">login</button>
<!--                        <p v-if="doLogin">{{submitData}}</p>-->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>