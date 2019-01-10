<div v-if="active === 'register'">

    <p><b>{{active}}</b></p>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form  @submit.prevent="doRegister" id="formRegister">
                    <fieldset>

                        <div class="errors mb-5" v-if="user.errorsRegister">
                            <p>If exists error(s)  please correct the following error(s):</p>
                        <ul>
                            <li v-for="error in user.errorsRegister">{{ user.errorsRegister[0] }}</li>
                        </ul>
                        </div>

                        <div class="form-group">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" v-model="user.name" type="text" placeholder="Name">
                        </div>

                        <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" v-model="user.email" type="text" placeholder="Email">
                        </div>

                        <div class="form-group">
                        <label for="username">Username</label>
                        <input id="username" class="form-control" v-model="user.username" type="text" placeholder="Username">
                        </div>

                        <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" v-model="user.password" type="password" placeholder="Password">
                        </div>

                        <button type="submit" class="btn btn-secondary btn-sm btn-block">Register</button>
<!--                        <p v-if="doRegister">{{submitData}}</p>-->
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

</div>