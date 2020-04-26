import Vue from "vue";
import Vuex from "vuex";
import Alert from "./modules/alert";
import ChangePassword from "./modules/change_password";
import Rules from "./modules/rules";
import PermissionsIndex from "./modules/Permissions";
import PermissionsSingle from "./modules/Permissions/single";
import RolesIndex from "./modules/Roles";
import RolesSingle from "./modules/Roles/single";
import UsersIndex from "./modules/Users";
import UsersSingle from "./modules/Users/single";
import ContactCompaniesIndex from "./modules/ContactCompanies";
import ContactCompaniesSingle from "./modules/ContactCompanies/single";
import ContactsIndex from "./modules/Contacts";
import ContactsSingle from "./modules/Contacts/single";
import PatientsIndex from "./modules/Patients";
import PatientsSingle from "./modules/Patients/single";
import DoctorsIndex from "./modules/Doctors";
import DoctorsSingle from "./modules/Doctors/single";
import AppointmentsIndex from "./modules/Appointments";
import AppointmentsSingle from "./modules/Appointments/single";

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== "production";

export default new Vuex.Store({
    modules: {
        Alert,
        ChangePassword,
        Rules,
        PermissionsIndex,
        PermissionsSingle,
        RolesIndex,
        RolesSingle,
        UsersIndex,
        UsersSingle,
        ContactCompaniesIndex,
        ContactCompaniesSingle,
        ContactsIndex,
        ContactsSingle,
        PatientsIndex,
        PatientsSingle,
        DoctorsIndex,
        DoctorsSingle,
        AppointmentsIndex,
        AppointmentsSingle,
    },
    strict: debug,
});
