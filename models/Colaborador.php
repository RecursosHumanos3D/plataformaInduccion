<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colaborador".
 *
 * @property integer $rutColaborador
 * @property string $dvColaborador
 * @property string $nombreColaborador
 * @property string $apellidosColaborador
 * @property string $edadColaborador
 * @property string $fechaNacimientoColaborador
 * @property string $usernameColaborador
 * @property string $fechaIngresoEmpresa
 * @property string $fechaIngresoInduccion
 * @property string $telefonoColaborador
 * @property string $direccionColaborador
 * @property string $correoPersonalColaborador
 * @property string $correoEmpresaColaborador
 * @property string $fechaTerminoColaborador
 * @property integer $estadoColaborador
 * @property integer $unidadDepartamento_idunidadDepartamento
 * @property integer $Cargos_idCargo
 * @property integer $empresa_rutEmpresa
 *
 * @property integer $idGrupo 
 * @property integer $secuencia 
 * @property Cargos $cargosIdCargo
 * @property Empresa $empresaRutEmpresa
 * @property Unidaddepartamento $unidadDepartamentoIdunidadDepartamento
 * @property Evaluaciones[] $evaluaciones
 * @property Procesos[] $procesos
 */
class Colaborador extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'colaborador';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['rutColaborador'], 'required'],
            [['rutColaborador', 'estadoColaborador', 'unidadDepartamento_idunidadDepartamento', 'Cargos_idCargo', 'empresa_rutEmpresa', 'idGrupo', 'secuencia'], 'integer'],
            [['fechaNacimientoColaborador', 'fechaIngresoEmpresa', 'fechaIngresoInduccion'], 'safe'],
            [['dvColaborador'], 'string', 'max' => 1],
            [['nombreColaborador', 'apellidosColaborador', 'edadColaborador', 'usernameColaborador', 'telefonoColaborador', 'direccionColaborador', 'correoPersonalColaborador', 'correoEmpresaColaborador', 'fechaTerminoColaborador'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'rutColaborador' => 'Rut Colaborador',
            'dvColaborador' => 'Dv Colaborador',
            'nombreColaborador' => 'Nombre Colaborador',
            'apellidosColaborador' => 'Apellidos Colaborador',
            'edadColaborador' => 'Edad Colaborador',
            'fechaNacimientoColaborador' => 'Fecha Nacimiento Colaborador',
            'usernameColaborador' => 'Username Colaborador',
            'fechaIngresoEmpresa' => 'Fecha Ingreso Empresa',
            'fechaIngresoInduccion' => 'Fecha Ingreso Induccion',
            'telefonoColaborador' => 'Telefono Colaborador',
            'direccionColaborador' => 'Direccion Colaborador',
            'correoPersonalColaborador' => 'Correo Personal Colaborador',
            'correoEmpresaColaborador' => 'Correo Empresa Colaborador',
            'fechaTerminoColaborador' => 'Fecha Termino Colaborador',
            'estadoColaborador' => 'Estado Colaborador',
            'unidadDepartamento_idunidadDepartamento' => 'Unidad Departamento Idunidad Departamento',
            'Cargos_idCargo' => 'Cargos Id Cargo',
            'empresa_rutEmpresa' => 'Empresa Rut Empresa',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCargosIdCargo() {
        return $this->hasOne(Cargos::className(), ['idCargo' => 'Cargos_idCargo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpresaRutEmpresa() {
        return $this->hasOne(Empresa::className(), ['rutEmpresa' => 'empresa_rutEmpresa']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUnidadDepartamentoIdunidadDepartamento() {
        return $this->hasOne(Unidaddepartamento::className(), ['idunidadDepartamento' => 'unidadDepartamento_idunidadDepartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvaluaciones() {
        return $this->hasMany(Evaluaciones::className(), ['Colaborador_rutColaborador' => 'rutColaborador']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProcesos() {
        return $this->hasMany(Procesos::className(), ['Colaborador_rutColaborador' => 'rutColaborador']);
    }

    public function getDjmanuales() {
        return $this->hasMany(Djmanual::className(), ['rutColaborador' => 'rutColaborador']);
    }

}
