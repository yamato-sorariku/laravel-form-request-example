<template>
    <section>
        <div v-if="hasError" class="alert alert-danger" role="alert">
            <ul>
                <li v-for="(errorMessage, index) in errorMessages" :key="index">{{errorMessage}}</li>
            </ul>
        </div>
        <div v-if="infoMessage" class="alert alert-info" role="alert">
            {{infoMessage}}
        </div>
        <div class="form-group">
            <label for="task_name">タスク名</label>
            <input type="text" class="form-control" name="task_name" v-model="task_name" />
        </div>
        <div class="form-group">
            <label for="remarks">備考</label>
            <input type="text" class="form-control" name="remarks" v-model="remarks" />
        </div>
        <div class="col-mb-3">
            <button class="btn btn-default btn-block" @click="post">登録</button>
        </div>
    </section>
</template>
<script>
export default {
    data: function () {
        return {
            task_name: "",
            remarks: "",
            errorMessages: [],
            infoMessage: ""
        }
    },
    computed: {
        hasError: function () {
            return this.errorMessages.length > 0;
        },
    },
    methods:{
        post: function () {
            var vm = this;

            vm.infoMessage = ""
            vm.errorMessages = []

            window.axios.post('/api/add', {
                task_name: this.task_name,
                remarks: this.remarks,
            })
            .then(function (response) {
                vm.infoMessage = "登録が完了しました"
            })
            .catch(function (error) {
                vm.errorMessages = error.response.data.errorMessages
            });
        }
    }
}
</script>
