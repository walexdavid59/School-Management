<template>
  <section class="col-lg-12">
    <div class="card alert">
      <div class="card-header">
        <h4>General Information</h4>
        <div class="card-header-right-icon">
          <ul>
            <li class="card-close" data-dismiss="alert">
              <i class="ti-close"></i>
            </li>
          </ul>
        </div>
      </div>

      <div class="card-body">
        <div class="basic-elements">
          <form @submit.prevent="CreateStudent">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Full Name</label>
                  <input
                    v-model="form.fullname"
                    id="fullname"
                    name="fullname"
                    type="text"
                    class="form-control"
                    placeholder="Some text value..."
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <input
                    v-model="form.email"
                    id="email"
                    name="email"
                    class="form-control"
                    type="email"
                    placeholder="Email"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input
                    v-model="form.password"
                    id="password"
                    name="password"
                    class="form-control"
                    type="password"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Date Of Birth</label>
                  <input
                    v-model="form.dob"
                    id="dob"
                    name="dob"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Gender</label>
                  <select v-model="form.gender" class="form-control" id="gender" name="gender">
                    <option value>Choose Option</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Basic Details</label>
                  <textarea
                    v-model="form.details"
                    id="details"
                    name="details"
                    class="form-control"
                    rows="3"
                    placeholder="Text input"
                  ></textarea>
                </div>

                <div class="card-header">
                  <h4>Admission Information</h4>
                  <div class="card-header-right-icon">
                    <ul>
                      <li class="card-close" data-dismiss="alert">
                        <i class="ti-close"></i>
                      </li>
                    </ul>
                  </div>
                </div>
                <br />

                <div class="form-group">
                  <label>Admission Number</label>
                  <input
                    v-model="form.admnumber"
                    id="admnumber"
                    name="admnumber"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Student Type</label>
                  <select v-model="form.stype" class="form-control" id="stype" name="stype">
                    <option value>Choose Type</option>
                    <option value="2">2</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleFormControlSelect1">Registration Status</label>
                  <select v-model="form.status" class="form-control" id="status" name="status">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Father's Full Name</label>
                  <input
                    v-model="form.father"
                    id="father"
                    name="father"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Father's Phone</label>
                  <input
                    v-model="form.fphone"
                    id="fphone"
                    name="fphone"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Mother's Full Name</label>
                  <input
                    v-model="form.mother"
                    id="mother"
                    name="mother"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Mother's Phone</label>
                  <input
                    v-model="form.mphone"
                    id="mphone"
                    name="mphone"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Occupation</label>
                  <input
                    v-model="form.occupation"
                    id="occupation"
                    name="occupation"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label>Address</label>
                  <input
                    v-model="form.address"
                    id="address"
                    name="address"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="card-header">
                  <h4>Class Information</h4>
                  <div class="card-header-right-icon">
                    <ul>
                      <li class="card-close" data-dismiss="alert">
                        <i class="ti-close"></i>
                      </li>
                    </ul>
                  </div>
                </div>
                <br />

                <div class="form-group">
                  <label>Date Admitted</label>
                  <input
                    v-model="form.dateadm"
                    id="dateadm"
                    name="dateadm"
                    class="form-control"
                    type="text"
                    value
                  />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Calss Admitted</label>
                  <select
                    v-model="form.classadm"
                    class="form-control"
                    id="classadm"
                    name="classadm"
                  >
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Picture Upload</span>
                  </div>
                  <div class="custom-file">
                    <input
                      type="file"
                      class="custom-file-input"
                      id="photo"
                      name="photo"
                      aria-describedby="inputGroupFileAddon01"
                    />
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                  </div>
                </div>
              </div>
              <div style="text-align:center;margin:auto;">
                <button type="submit" class="btn btn-primary btn-save">Save</button>
              </div>
              <div v-if="success" class="alert alert-success mt-3">Message sent!</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- /# column -->
</template>

<script>
export default {
  data() {
    return {
      form: new Form({
        fullname: "",
        email: "",
        password: "",
        dob: "",
        gender: "",
        details: "",
        admnumber: "",
        stype: "",
        father: "",
        fphone: "",
        mother: "",
        mphone: "",
        occupation: "",
        address: "",
        dateadm: "",
        classadm: "",
        photo: ""
      })
    };
  },
  methods: {
    CreateStudent() {
      this.form.post("api/students-list");
    }
  },
  mounted() {
    console.log("Component mounted.");
  }
};
</script>

<style scoped>
.btn-save {
  margin: auto;
}
</style>
