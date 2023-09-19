<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VehicleCertificateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VehicleCertificateResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * certificateNumber  合格证编号。
    * issueDate  发证日期。
    * manufactureName  车辆制造企业名称。
    * vehicleBrand  车辆品牌。
    * vehicleName  车辆名称。
    * vehicleModel  车辆型号。
    * vin  车架号。
    * vehicleColor  车身颜色。
    * chassisModel  底盘型号。
    * chassisId  底盘ID。
    * chassisCertificateNumber  底盘合格证编号。
    * engineModel  发动机型号。
    * engineNumber  发动机号。
    * fuelType  燃料种类。
    * displacement  排量。
    * power  功率。
    * emissionStandard  排放标准。
    * fuelConsumption  油耗。
    * overallDimensionLength  外廓尺寸-长。
    * overallDimensionWidth  外廓尺寸-宽。
    * overallDimensionHeight  外廓尺寸-高。
    * containerDimensionLength  货厢内部尺寸-长。
    * containerDimensionWidth  货厢内部尺寸-宽。
    * containerDimensionHeight  货厢内部尺寸-高。
    * springQuantity  钢板弹簧片数。
    * tireQuantity  轮胎数。
    * tireSize  轮胎规格。
    * frontWheelTrack  轮距-前。
    * rearWheelTrack  轮距-后。
    * wheelbase  轴距。
    * axleLoad  轴荷。
    * axleQuantity  轴数。
    * steeringForm  转向形式。
    * totalWeight  总质量。
    * equipmentWeight  整备质量。
    * maximumLadenMass  额定载质量。
    * massUtilizationCoefficient  载质量利用系数。
    * tractionWeight  准牵引总质量。
    * maximumLoadMass  半挂车鞍座最大允许总质量。
    * cabPassengerCapacity  驾驶室准乘人数。
    * passengerCapacity  额定载客。
    * maxDesignSpeed  最高设计车速。
    * manufactureDate  车辆制造日期。
    * confidence  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'certificateNumber' => 'string',
            'issueDate' => 'string',
            'manufactureName' => 'string',
            'vehicleBrand' => 'string',
            'vehicleName' => 'string',
            'vehicleModel' => 'string',
            'vin' => 'string',
            'vehicleColor' => 'string',
            'chassisModel' => 'string',
            'chassisId' => 'string',
            'chassisCertificateNumber' => 'string',
            'engineModel' => 'string',
            'engineNumber' => 'string',
            'fuelType' => 'string',
            'displacement' => 'string',
            'power' => 'string',
            'emissionStandard' => 'string',
            'fuelConsumption' => 'string',
            'overallDimensionLength' => 'string',
            'overallDimensionWidth' => 'string',
            'overallDimensionHeight' => 'string',
            'containerDimensionLength' => 'string',
            'containerDimensionWidth' => 'string',
            'containerDimensionHeight' => 'string',
            'springQuantity' => 'string',
            'tireQuantity' => 'string',
            'tireSize' => 'string',
            'frontWheelTrack' => 'string',
            'rearWheelTrack' => 'string',
            'wheelbase' => 'string',
            'axleLoad' => 'string',
            'axleQuantity' => 'string',
            'steeringForm' => 'string',
            'totalWeight' => 'string',
            'equipmentWeight' => 'string',
            'maximumLadenMass' => 'string',
            'massUtilizationCoefficient' => 'string',
            'tractionWeight' => 'string',
            'maximumLoadMass' => 'string',
            'cabPassengerCapacity' => 'string',
            'passengerCapacity' => 'string',
            'maxDesignSpeed' => 'string',
            'manufactureDate' => 'string',
            'confidence' => 'object',
            'textLocation' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * certificateNumber  合格证编号。
    * issueDate  发证日期。
    * manufactureName  车辆制造企业名称。
    * vehicleBrand  车辆品牌。
    * vehicleName  车辆名称。
    * vehicleModel  车辆型号。
    * vin  车架号。
    * vehicleColor  车身颜色。
    * chassisModel  底盘型号。
    * chassisId  底盘ID。
    * chassisCertificateNumber  底盘合格证编号。
    * engineModel  发动机型号。
    * engineNumber  发动机号。
    * fuelType  燃料种类。
    * displacement  排量。
    * power  功率。
    * emissionStandard  排放标准。
    * fuelConsumption  油耗。
    * overallDimensionLength  外廓尺寸-长。
    * overallDimensionWidth  外廓尺寸-宽。
    * overallDimensionHeight  外廓尺寸-高。
    * containerDimensionLength  货厢内部尺寸-长。
    * containerDimensionWidth  货厢内部尺寸-宽。
    * containerDimensionHeight  货厢内部尺寸-高。
    * springQuantity  钢板弹簧片数。
    * tireQuantity  轮胎数。
    * tireSize  轮胎规格。
    * frontWheelTrack  轮距-前。
    * rearWheelTrack  轮距-后。
    * wheelbase  轴距。
    * axleLoad  轴荷。
    * axleQuantity  轴数。
    * steeringForm  转向形式。
    * totalWeight  总质量。
    * equipmentWeight  整备质量。
    * maximumLadenMass  额定载质量。
    * massUtilizationCoefficient  载质量利用系数。
    * tractionWeight  准牵引总质量。
    * maximumLoadMass  半挂车鞍座最大允许总质量。
    * cabPassengerCapacity  驾驶室准乘人数。
    * passengerCapacity  额定载客。
    * maxDesignSpeed  最高设计车速。
    * manufactureDate  车辆制造日期。
    * confidence  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'certificateNumber' => null,
        'issueDate' => null,
        'manufactureName' => null,
        'vehicleBrand' => null,
        'vehicleName' => null,
        'vehicleModel' => null,
        'vin' => null,
        'vehicleColor' => null,
        'chassisModel' => null,
        'chassisId' => null,
        'chassisCertificateNumber' => null,
        'engineModel' => null,
        'engineNumber' => null,
        'fuelType' => null,
        'displacement' => null,
        'power' => null,
        'emissionStandard' => null,
        'fuelConsumption' => null,
        'overallDimensionLength' => null,
        'overallDimensionWidth' => null,
        'overallDimensionHeight' => null,
        'containerDimensionLength' => null,
        'containerDimensionWidth' => null,
        'containerDimensionHeight' => null,
        'springQuantity' => null,
        'tireQuantity' => null,
        'tireSize' => null,
        'frontWheelTrack' => null,
        'rearWheelTrack' => null,
        'wheelbase' => null,
        'axleLoad' => null,
        'axleQuantity' => null,
        'steeringForm' => null,
        'totalWeight' => null,
        'equipmentWeight' => null,
        'maximumLadenMass' => null,
        'massUtilizationCoefficient' => null,
        'tractionWeight' => null,
        'maximumLoadMass' => null,
        'cabPassengerCapacity' => null,
        'passengerCapacity' => null,
        'maxDesignSpeed' => null,
        'manufactureDate' => null,
        'confidence' => null,
        'textLocation' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * certificateNumber  合格证编号。
    * issueDate  发证日期。
    * manufactureName  车辆制造企业名称。
    * vehicleBrand  车辆品牌。
    * vehicleName  车辆名称。
    * vehicleModel  车辆型号。
    * vin  车架号。
    * vehicleColor  车身颜色。
    * chassisModel  底盘型号。
    * chassisId  底盘ID。
    * chassisCertificateNumber  底盘合格证编号。
    * engineModel  发动机型号。
    * engineNumber  发动机号。
    * fuelType  燃料种类。
    * displacement  排量。
    * power  功率。
    * emissionStandard  排放标准。
    * fuelConsumption  油耗。
    * overallDimensionLength  外廓尺寸-长。
    * overallDimensionWidth  外廓尺寸-宽。
    * overallDimensionHeight  外廓尺寸-高。
    * containerDimensionLength  货厢内部尺寸-长。
    * containerDimensionWidth  货厢内部尺寸-宽。
    * containerDimensionHeight  货厢内部尺寸-高。
    * springQuantity  钢板弹簧片数。
    * tireQuantity  轮胎数。
    * tireSize  轮胎规格。
    * frontWheelTrack  轮距-前。
    * rearWheelTrack  轮距-后。
    * wheelbase  轴距。
    * axleLoad  轴荷。
    * axleQuantity  轴数。
    * steeringForm  转向形式。
    * totalWeight  总质量。
    * equipmentWeight  整备质量。
    * maximumLadenMass  额定载质量。
    * massUtilizationCoefficient  载质量利用系数。
    * tractionWeight  准牵引总质量。
    * maximumLoadMass  半挂车鞍座最大允许总质量。
    * cabPassengerCapacity  驾驶室准乘人数。
    * passengerCapacity  额定载客。
    * maxDesignSpeed  最高设计车速。
    * manufactureDate  车辆制造日期。
    * confidence  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'certificateNumber' => 'certificate_number',
            'issueDate' => 'issue_date',
            'manufactureName' => 'manufacture_name',
            'vehicleBrand' => 'vehicle_brand',
            'vehicleName' => 'vehicle_name',
            'vehicleModel' => 'vehicle_model',
            'vin' => 'vin',
            'vehicleColor' => 'vehicle_color',
            'chassisModel' => 'chassis_model',
            'chassisId' => 'chassis_id',
            'chassisCertificateNumber' => 'chassis_certificate_number',
            'engineModel' => 'engine_model',
            'engineNumber' => 'engine_number',
            'fuelType' => 'fuel_type',
            'displacement' => 'displacement',
            'power' => 'power',
            'emissionStandard' => 'emission_standard',
            'fuelConsumption' => 'fuel_consumption',
            'overallDimensionLength' => 'overall_dimension_length',
            'overallDimensionWidth' => 'overall_dimension_width',
            'overallDimensionHeight' => 'overall_dimension_height',
            'containerDimensionLength' => 'container_dimension_length',
            'containerDimensionWidth' => 'container_dimension_width',
            'containerDimensionHeight' => 'container_dimension_height',
            'springQuantity' => 'spring_quantity',
            'tireQuantity' => 'tire_quantity',
            'tireSize' => 'tire_size',
            'frontWheelTrack' => 'front_wheel_track',
            'rearWheelTrack' => 'rear_wheel_track',
            'wheelbase' => 'wheelbase',
            'axleLoad' => 'axle_load',
            'axleQuantity' => 'axle_quantity',
            'steeringForm' => 'steering_form',
            'totalWeight' => 'total_weight',
            'equipmentWeight' => 'equipment_weight',
            'maximumLadenMass' => 'maximum_laden_mass',
            'massUtilizationCoefficient' => 'mass_utilization_coefficient',
            'tractionWeight' => 'traction_weight',
            'maximumLoadMass' => 'maximum_load_mass',
            'cabPassengerCapacity' => 'cab_passenger_capacity',
            'passengerCapacity' => 'passenger_capacity',
            'maxDesignSpeed' => 'max_design_speed',
            'manufactureDate' => 'manufacture_date',
            'confidence' => 'confidence',
            'textLocation' => 'text_location'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * certificateNumber  合格证编号。
    * issueDate  发证日期。
    * manufactureName  车辆制造企业名称。
    * vehicleBrand  车辆品牌。
    * vehicleName  车辆名称。
    * vehicleModel  车辆型号。
    * vin  车架号。
    * vehicleColor  车身颜色。
    * chassisModel  底盘型号。
    * chassisId  底盘ID。
    * chassisCertificateNumber  底盘合格证编号。
    * engineModel  发动机型号。
    * engineNumber  发动机号。
    * fuelType  燃料种类。
    * displacement  排量。
    * power  功率。
    * emissionStandard  排放标准。
    * fuelConsumption  油耗。
    * overallDimensionLength  外廓尺寸-长。
    * overallDimensionWidth  外廓尺寸-宽。
    * overallDimensionHeight  外廓尺寸-高。
    * containerDimensionLength  货厢内部尺寸-长。
    * containerDimensionWidth  货厢内部尺寸-宽。
    * containerDimensionHeight  货厢内部尺寸-高。
    * springQuantity  钢板弹簧片数。
    * tireQuantity  轮胎数。
    * tireSize  轮胎规格。
    * frontWheelTrack  轮距-前。
    * rearWheelTrack  轮距-后。
    * wheelbase  轴距。
    * axleLoad  轴荷。
    * axleQuantity  轴数。
    * steeringForm  转向形式。
    * totalWeight  总质量。
    * equipmentWeight  整备质量。
    * maximumLadenMass  额定载质量。
    * massUtilizationCoefficient  载质量利用系数。
    * tractionWeight  准牵引总质量。
    * maximumLoadMass  半挂车鞍座最大允许总质量。
    * cabPassengerCapacity  驾驶室准乘人数。
    * passengerCapacity  额定载客。
    * maxDesignSpeed  最高设计车速。
    * manufactureDate  车辆制造日期。
    * confidence  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $setters = [
            'certificateNumber' => 'setCertificateNumber',
            'issueDate' => 'setIssueDate',
            'manufactureName' => 'setManufactureName',
            'vehicleBrand' => 'setVehicleBrand',
            'vehicleName' => 'setVehicleName',
            'vehicleModel' => 'setVehicleModel',
            'vin' => 'setVin',
            'vehicleColor' => 'setVehicleColor',
            'chassisModel' => 'setChassisModel',
            'chassisId' => 'setChassisId',
            'chassisCertificateNumber' => 'setChassisCertificateNumber',
            'engineModel' => 'setEngineModel',
            'engineNumber' => 'setEngineNumber',
            'fuelType' => 'setFuelType',
            'displacement' => 'setDisplacement',
            'power' => 'setPower',
            'emissionStandard' => 'setEmissionStandard',
            'fuelConsumption' => 'setFuelConsumption',
            'overallDimensionLength' => 'setOverallDimensionLength',
            'overallDimensionWidth' => 'setOverallDimensionWidth',
            'overallDimensionHeight' => 'setOverallDimensionHeight',
            'containerDimensionLength' => 'setContainerDimensionLength',
            'containerDimensionWidth' => 'setContainerDimensionWidth',
            'containerDimensionHeight' => 'setContainerDimensionHeight',
            'springQuantity' => 'setSpringQuantity',
            'tireQuantity' => 'setTireQuantity',
            'tireSize' => 'setTireSize',
            'frontWheelTrack' => 'setFrontWheelTrack',
            'rearWheelTrack' => 'setRearWheelTrack',
            'wheelbase' => 'setWheelbase',
            'axleLoad' => 'setAxleLoad',
            'axleQuantity' => 'setAxleQuantity',
            'steeringForm' => 'setSteeringForm',
            'totalWeight' => 'setTotalWeight',
            'equipmentWeight' => 'setEquipmentWeight',
            'maximumLadenMass' => 'setMaximumLadenMass',
            'massUtilizationCoefficient' => 'setMassUtilizationCoefficient',
            'tractionWeight' => 'setTractionWeight',
            'maximumLoadMass' => 'setMaximumLoadMass',
            'cabPassengerCapacity' => 'setCabPassengerCapacity',
            'passengerCapacity' => 'setPassengerCapacity',
            'maxDesignSpeed' => 'setMaxDesignSpeed',
            'manufactureDate' => 'setManufactureDate',
            'confidence' => 'setConfidence',
            'textLocation' => 'setTextLocation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * certificateNumber  合格证编号。
    * issueDate  发证日期。
    * manufactureName  车辆制造企业名称。
    * vehicleBrand  车辆品牌。
    * vehicleName  车辆名称。
    * vehicleModel  车辆型号。
    * vin  车架号。
    * vehicleColor  车身颜色。
    * chassisModel  底盘型号。
    * chassisId  底盘ID。
    * chassisCertificateNumber  底盘合格证编号。
    * engineModel  发动机型号。
    * engineNumber  发动机号。
    * fuelType  燃料种类。
    * displacement  排量。
    * power  功率。
    * emissionStandard  排放标准。
    * fuelConsumption  油耗。
    * overallDimensionLength  外廓尺寸-长。
    * overallDimensionWidth  外廓尺寸-宽。
    * overallDimensionHeight  外廓尺寸-高。
    * containerDimensionLength  货厢内部尺寸-长。
    * containerDimensionWidth  货厢内部尺寸-宽。
    * containerDimensionHeight  货厢内部尺寸-高。
    * springQuantity  钢板弹簧片数。
    * tireQuantity  轮胎数。
    * tireSize  轮胎规格。
    * frontWheelTrack  轮距-前。
    * rearWheelTrack  轮距-后。
    * wheelbase  轴距。
    * axleLoad  轴荷。
    * axleQuantity  轴数。
    * steeringForm  转向形式。
    * totalWeight  总质量。
    * equipmentWeight  整备质量。
    * maximumLadenMass  额定载质量。
    * massUtilizationCoefficient  载质量利用系数。
    * tractionWeight  准牵引总质量。
    * maximumLoadMass  半挂车鞍座最大允许总质量。
    * cabPassengerCapacity  驾驶室准乘人数。
    * passengerCapacity  额定载客。
    * maxDesignSpeed  最高设计车速。
    * manufactureDate  车辆制造日期。
    * confidence  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    * textLocation  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @var string[]
    */
    protected static $getters = [
            'certificateNumber' => 'getCertificateNumber',
            'issueDate' => 'getIssueDate',
            'manufactureName' => 'getManufactureName',
            'vehicleBrand' => 'getVehicleBrand',
            'vehicleName' => 'getVehicleName',
            'vehicleModel' => 'getVehicleModel',
            'vin' => 'getVin',
            'vehicleColor' => 'getVehicleColor',
            'chassisModel' => 'getChassisModel',
            'chassisId' => 'getChassisId',
            'chassisCertificateNumber' => 'getChassisCertificateNumber',
            'engineModel' => 'getEngineModel',
            'engineNumber' => 'getEngineNumber',
            'fuelType' => 'getFuelType',
            'displacement' => 'getDisplacement',
            'power' => 'getPower',
            'emissionStandard' => 'getEmissionStandard',
            'fuelConsumption' => 'getFuelConsumption',
            'overallDimensionLength' => 'getOverallDimensionLength',
            'overallDimensionWidth' => 'getOverallDimensionWidth',
            'overallDimensionHeight' => 'getOverallDimensionHeight',
            'containerDimensionLength' => 'getContainerDimensionLength',
            'containerDimensionWidth' => 'getContainerDimensionWidth',
            'containerDimensionHeight' => 'getContainerDimensionHeight',
            'springQuantity' => 'getSpringQuantity',
            'tireQuantity' => 'getTireQuantity',
            'tireSize' => 'getTireSize',
            'frontWheelTrack' => 'getFrontWheelTrack',
            'rearWheelTrack' => 'getRearWheelTrack',
            'wheelbase' => 'getWheelbase',
            'axleLoad' => 'getAxleLoad',
            'axleQuantity' => 'getAxleQuantity',
            'steeringForm' => 'getSteeringForm',
            'totalWeight' => 'getTotalWeight',
            'equipmentWeight' => 'getEquipmentWeight',
            'maximumLadenMass' => 'getMaximumLadenMass',
            'massUtilizationCoefficient' => 'getMassUtilizationCoefficient',
            'tractionWeight' => 'getTractionWeight',
            'maximumLoadMass' => 'getMaximumLoadMass',
            'cabPassengerCapacity' => 'getCabPassengerCapacity',
            'passengerCapacity' => 'getPassengerCapacity',
            'maxDesignSpeed' => 'getMaxDesignSpeed',
            'manufactureDate' => 'getManufactureDate',
            'confidence' => 'getConfidence',
            'textLocation' => 'getTextLocation'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['certificateNumber'] = isset($data['certificateNumber']) ? $data['certificateNumber'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['manufactureName'] = isset($data['manufactureName']) ? $data['manufactureName'] : null;
        $this->container['vehicleBrand'] = isset($data['vehicleBrand']) ? $data['vehicleBrand'] : null;
        $this->container['vehicleName'] = isset($data['vehicleName']) ? $data['vehicleName'] : null;
        $this->container['vehicleModel'] = isset($data['vehicleModel']) ? $data['vehicleModel'] : null;
        $this->container['vin'] = isset($data['vin']) ? $data['vin'] : null;
        $this->container['vehicleColor'] = isset($data['vehicleColor']) ? $data['vehicleColor'] : null;
        $this->container['chassisModel'] = isset($data['chassisModel']) ? $data['chassisModel'] : null;
        $this->container['chassisId'] = isset($data['chassisId']) ? $data['chassisId'] : null;
        $this->container['chassisCertificateNumber'] = isset($data['chassisCertificateNumber']) ? $data['chassisCertificateNumber'] : null;
        $this->container['engineModel'] = isset($data['engineModel']) ? $data['engineModel'] : null;
        $this->container['engineNumber'] = isset($data['engineNumber']) ? $data['engineNumber'] : null;
        $this->container['fuelType'] = isset($data['fuelType']) ? $data['fuelType'] : null;
        $this->container['displacement'] = isset($data['displacement']) ? $data['displacement'] : null;
        $this->container['power'] = isset($data['power']) ? $data['power'] : null;
        $this->container['emissionStandard'] = isset($data['emissionStandard']) ? $data['emissionStandard'] : null;
        $this->container['fuelConsumption'] = isset($data['fuelConsumption']) ? $data['fuelConsumption'] : null;
        $this->container['overallDimensionLength'] = isset($data['overallDimensionLength']) ? $data['overallDimensionLength'] : null;
        $this->container['overallDimensionWidth'] = isset($data['overallDimensionWidth']) ? $data['overallDimensionWidth'] : null;
        $this->container['overallDimensionHeight'] = isset($data['overallDimensionHeight']) ? $data['overallDimensionHeight'] : null;
        $this->container['containerDimensionLength'] = isset($data['containerDimensionLength']) ? $data['containerDimensionLength'] : null;
        $this->container['containerDimensionWidth'] = isset($data['containerDimensionWidth']) ? $data['containerDimensionWidth'] : null;
        $this->container['containerDimensionHeight'] = isset($data['containerDimensionHeight']) ? $data['containerDimensionHeight'] : null;
        $this->container['springQuantity'] = isset($data['springQuantity']) ? $data['springQuantity'] : null;
        $this->container['tireQuantity'] = isset($data['tireQuantity']) ? $data['tireQuantity'] : null;
        $this->container['tireSize'] = isset($data['tireSize']) ? $data['tireSize'] : null;
        $this->container['frontWheelTrack'] = isset($data['frontWheelTrack']) ? $data['frontWheelTrack'] : null;
        $this->container['rearWheelTrack'] = isset($data['rearWheelTrack']) ? $data['rearWheelTrack'] : null;
        $this->container['wheelbase'] = isset($data['wheelbase']) ? $data['wheelbase'] : null;
        $this->container['axleLoad'] = isset($data['axleLoad']) ? $data['axleLoad'] : null;
        $this->container['axleQuantity'] = isset($data['axleQuantity']) ? $data['axleQuantity'] : null;
        $this->container['steeringForm'] = isset($data['steeringForm']) ? $data['steeringForm'] : null;
        $this->container['totalWeight'] = isset($data['totalWeight']) ? $data['totalWeight'] : null;
        $this->container['equipmentWeight'] = isset($data['equipmentWeight']) ? $data['equipmentWeight'] : null;
        $this->container['maximumLadenMass'] = isset($data['maximumLadenMass']) ? $data['maximumLadenMass'] : null;
        $this->container['massUtilizationCoefficient'] = isset($data['massUtilizationCoefficient']) ? $data['massUtilizationCoefficient'] : null;
        $this->container['tractionWeight'] = isset($data['tractionWeight']) ? $data['tractionWeight'] : null;
        $this->container['maximumLoadMass'] = isset($data['maximumLoadMass']) ? $data['maximumLoadMass'] : null;
        $this->container['cabPassengerCapacity'] = isset($data['cabPassengerCapacity']) ? $data['cabPassengerCapacity'] : null;
        $this->container['passengerCapacity'] = isset($data['passengerCapacity']) ? $data['passengerCapacity'] : null;
        $this->container['maxDesignSpeed'] = isset($data['maxDesignSpeed']) ? $data['maxDesignSpeed'] : null;
        $this->container['manufactureDate'] = isset($data['manufactureDate']) ? $data['manufactureDate'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets certificateNumber
    *  合格证编号。
    *
    * @return string|null
    */
    public function getCertificateNumber()
    {
        return $this->container['certificateNumber'];
    }

    /**
    * Sets certificateNumber
    *
    * @param string|null $certificateNumber 合格证编号。
    *
    * @return $this
    */
    public function setCertificateNumber($certificateNumber)
    {
        $this->container['certificateNumber'] = $certificateNumber;
        return $this;
    }

    /**
    * Gets issueDate
    *  发证日期。
    *
    * @return string|null
    */
    public function getIssueDate()
    {
        return $this->container['issueDate'];
    }

    /**
    * Sets issueDate
    *
    * @param string|null $issueDate 发证日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets manufactureName
    *  车辆制造企业名称。
    *
    * @return string|null
    */
    public function getManufactureName()
    {
        return $this->container['manufactureName'];
    }

    /**
    * Sets manufactureName
    *
    * @param string|null $manufactureName 车辆制造企业名称。
    *
    * @return $this
    */
    public function setManufactureName($manufactureName)
    {
        $this->container['manufactureName'] = $manufactureName;
        return $this;
    }

    /**
    * Gets vehicleBrand
    *  车辆品牌。
    *
    * @return string|null
    */
    public function getVehicleBrand()
    {
        return $this->container['vehicleBrand'];
    }

    /**
    * Sets vehicleBrand
    *
    * @param string|null $vehicleBrand 车辆品牌。
    *
    * @return $this
    */
    public function setVehicleBrand($vehicleBrand)
    {
        $this->container['vehicleBrand'] = $vehicleBrand;
        return $this;
    }

    /**
    * Gets vehicleName
    *  车辆名称。
    *
    * @return string|null
    */
    public function getVehicleName()
    {
        return $this->container['vehicleName'];
    }

    /**
    * Sets vehicleName
    *
    * @param string|null $vehicleName 车辆名称。
    *
    * @return $this
    */
    public function setVehicleName($vehicleName)
    {
        $this->container['vehicleName'] = $vehicleName;
        return $this;
    }

    /**
    * Gets vehicleModel
    *  车辆型号。
    *
    * @return string|null
    */
    public function getVehicleModel()
    {
        return $this->container['vehicleModel'];
    }

    /**
    * Sets vehicleModel
    *
    * @param string|null $vehicleModel 车辆型号。
    *
    * @return $this
    */
    public function setVehicleModel($vehicleModel)
    {
        $this->container['vehicleModel'] = $vehicleModel;
        return $this;
    }

    /**
    * Gets vin
    *  车架号。
    *
    * @return string|null
    */
    public function getVin()
    {
        return $this->container['vin'];
    }

    /**
    * Sets vin
    *
    * @param string|null $vin 车架号。
    *
    * @return $this
    */
    public function setVin($vin)
    {
        $this->container['vin'] = $vin;
        return $this;
    }

    /**
    * Gets vehicleColor
    *  车身颜色。
    *
    * @return string|null
    */
    public function getVehicleColor()
    {
        return $this->container['vehicleColor'];
    }

    /**
    * Sets vehicleColor
    *
    * @param string|null $vehicleColor 车身颜色。
    *
    * @return $this
    */
    public function setVehicleColor($vehicleColor)
    {
        $this->container['vehicleColor'] = $vehicleColor;
        return $this;
    }

    /**
    * Gets chassisModel
    *  底盘型号。
    *
    * @return string|null
    */
    public function getChassisModel()
    {
        return $this->container['chassisModel'];
    }

    /**
    * Sets chassisModel
    *
    * @param string|null $chassisModel 底盘型号。
    *
    * @return $this
    */
    public function setChassisModel($chassisModel)
    {
        $this->container['chassisModel'] = $chassisModel;
        return $this;
    }

    /**
    * Gets chassisId
    *  底盘ID。
    *
    * @return string|null
    */
    public function getChassisId()
    {
        return $this->container['chassisId'];
    }

    /**
    * Sets chassisId
    *
    * @param string|null $chassisId 底盘ID。
    *
    * @return $this
    */
    public function setChassisId($chassisId)
    {
        $this->container['chassisId'] = $chassisId;
        return $this;
    }

    /**
    * Gets chassisCertificateNumber
    *  底盘合格证编号。
    *
    * @return string|null
    */
    public function getChassisCertificateNumber()
    {
        return $this->container['chassisCertificateNumber'];
    }

    /**
    * Sets chassisCertificateNumber
    *
    * @param string|null $chassisCertificateNumber 底盘合格证编号。
    *
    * @return $this
    */
    public function setChassisCertificateNumber($chassisCertificateNumber)
    {
        $this->container['chassisCertificateNumber'] = $chassisCertificateNumber;
        return $this;
    }

    /**
    * Gets engineModel
    *  发动机型号。
    *
    * @return string|null
    */
    public function getEngineModel()
    {
        return $this->container['engineModel'];
    }

    /**
    * Sets engineModel
    *
    * @param string|null $engineModel 发动机型号。
    *
    * @return $this
    */
    public function setEngineModel($engineModel)
    {
        $this->container['engineModel'] = $engineModel;
        return $this;
    }

    /**
    * Gets engineNumber
    *  发动机号。
    *
    * @return string|null
    */
    public function getEngineNumber()
    {
        return $this->container['engineNumber'];
    }

    /**
    * Sets engineNumber
    *
    * @param string|null $engineNumber 发动机号。
    *
    * @return $this
    */
    public function setEngineNumber($engineNumber)
    {
        $this->container['engineNumber'] = $engineNumber;
        return $this;
    }

    /**
    * Gets fuelType
    *  燃料种类。
    *
    * @return string|null
    */
    public function getFuelType()
    {
        return $this->container['fuelType'];
    }

    /**
    * Sets fuelType
    *
    * @param string|null $fuelType 燃料种类。
    *
    * @return $this
    */
    public function setFuelType($fuelType)
    {
        $this->container['fuelType'] = $fuelType;
        return $this;
    }

    /**
    * Gets displacement
    *  排量。
    *
    * @return string|null
    */
    public function getDisplacement()
    {
        return $this->container['displacement'];
    }

    /**
    * Sets displacement
    *
    * @param string|null $displacement 排量。
    *
    * @return $this
    */
    public function setDisplacement($displacement)
    {
        $this->container['displacement'] = $displacement;
        return $this;
    }

    /**
    * Gets power
    *  功率。
    *
    * @return string|null
    */
    public function getPower()
    {
        return $this->container['power'];
    }

    /**
    * Sets power
    *
    * @param string|null $power 功率。
    *
    * @return $this
    */
    public function setPower($power)
    {
        $this->container['power'] = $power;
        return $this;
    }

    /**
    * Gets emissionStandard
    *  排放标准。
    *
    * @return string|null
    */
    public function getEmissionStandard()
    {
        return $this->container['emissionStandard'];
    }

    /**
    * Sets emissionStandard
    *
    * @param string|null $emissionStandard 排放标准。
    *
    * @return $this
    */
    public function setEmissionStandard($emissionStandard)
    {
        $this->container['emissionStandard'] = $emissionStandard;
        return $this;
    }

    /**
    * Gets fuelConsumption
    *  油耗。
    *
    * @return string|null
    */
    public function getFuelConsumption()
    {
        return $this->container['fuelConsumption'];
    }

    /**
    * Sets fuelConsumption
    *
    * @param string|null $fuelConsumption 油耗。
    *
    * @return $this
    */
    public function setFuelConsumption($fuelConsumption)
    {
        $this->container['fuelConsumption'] = $fuelConsumption;
        return $this;
    }

    /**
    * Gets overallDimensionLength
    *  外廓尺寸-长。
    *
    * @return string|null
    */
    public function getOverallDimensionLength()
    {
        return $this->container['overallDimensionLength'];
    }

    /**
    * Sets overallDimensionLength
    *
    * @param string|null $overallDimensionLength 外廓尺寸-长。
    *
    * @return $this
    */
    public function setOverallDimensionLength($overallDimensionLength)
    {
        $this->container['overallDimensionLength'] = $overallDimensionLength;
        return $this;
    }

    /**
    * Gets overallDimensionWidth
    *  外廓尺寸-宽。
    *
    * @return string|null
    */
    public function getOverallDimensionWidth()
    {
        return $this->container['overallDimensionWidth'];
    }

    /**
    * Sets overallDimensionWidth
    *
    * @param string|null $overallDimensionWidth 外廓尺寸-宽。
    *
    * @return $this
    */
    public function setOverallDimensionWidth($overallDimensionWidth)
    {
        $this->container['overallDimensionWidth'] = $overallDimensionWidth;
        return $this;
    }

    /**
    * Gets overallDimensionHeight
    *  外廓尺寸-高。
    *
    * @return string|null
    */
    public function getOverallDimensionHeight()
    {
        return $this->container['overallDimensionHeight'];
    }

    /**
    * Sets overallDimensionHeight
    *
    * @param string|null $overallDimensionHeight 外廓尺寸-高。
    *
    * @return $this
    */
    public function setOverallDimensionHeight($overallDimensionHeight)
    {
        $this->container['overallDimensionHeight'] = $overallDimensionHeight;
        return $this;
    }

    /**
    * Gets containerDimensionLength
    *  货厢内部尺寸-长。
    *
    * @return string|null
    */
    public function getContainerDimensionLength()
    {
        return $this->container['containerDimensionLength'];
    }

    /**
    * Sets containerDimensionLength
    *
    * @param string|null $containerDimensionLength 货厢内部尺寸-长。
    *
    * @return $this
    */
    public function setContainerDimensionLength($containerDimensionLength)
    {
        $this->container['containerDimensionLength'] = $containerDimensionLength;
        return $this;
    }

    /**
    * Gets containerDimensionWidth
    *  货厢内部尺寸-宽。
    *
    * @return string|null
    */
    public function getContainerDimensionWidth()
    {
        return $this->container['containerDimensionWidth'];
    }

    /**
    * Sets containerDimensionWidth
    *
    * @param string|null $containerDimensionWidth 货厢内部尺寸-宽。
    *
    * @return $this
    */
    public function setContainerDimensionWidth($containerDimensionWidth)
    {
        $this->container['containerDimensionWidth'] = $containerDimensionWidth;
        return $this;
    }

    /**
    * Gets containerDimensionHeight
    *  货厢内部尺寸-高。
    *
    * @return string|null
    */
    public function getContainerDimensionHeight()
    {
        return $this->container['containerDimensionHeight'];
    }

    /**
    * Sets containerDimensionHeight
    *
    * @param string|null $containerDimensionHeight 货厢内部尺寸-高。
    *
    * @return $this
    */
    public function setContainerDimensionHeight($containerDimensionHeight)
    {
        $this->container['containerDimensionHeight'] = $containerDimensionHeight;
        return $this;
    }

    /**
    * Gets springQuantity
    *  钢板弹簧片数。
    *
    * @return string|null
    */
    public function getSpringQuantity()
    {
        return $this->container['springQuantity'];
    }

    /**
    * Sets springQuantity
    *
    * @param string|null $springQuantity 钢板弹簧片数。
    *
    * @return $this
    */
    public function setSpringQuantity($springQuantity)
    {
        $this->container['springQuantity'] = $springQuantity;
        return $this;
    }

    /**
    * Gets tireQuantity
    *  轮胎数。
    *
    * @return string|null
    */
    public function getTireQuantity()
    {
        return $this->container['tireQuantity'];
    }

    /**
    * Sets tireQuantity
    *
    * @param string|null $tireQuantity 轮胎数。
    *
    * @return $this
    */
    public function setTireQuantity($tireQuantity)
    {
        $this->container['tireQuantity'] = $tireQuantity;
        return $this;
    }

    /**
    * Gets tireSize
    *  轮胎规格。
    *
    * @return string|null
    */
    public function getTireSize()
    {
        return $this->container['tireSize'];
    }

    /**
    * Sets tireSize
    *
    * @param string|null $tireSize 轮胎规格。
    *
    * @return $this
    */
    public function setTireSize($tireSize)
    {
        $this->container['tireSize'] = $tireSize;
        return $this;
    }

    /**
    * Gets frontWheelTrack
    *  轮距-前。
    *
    * @return string|null
    */
    public function getFrontWheelTrack()
    {
        return $this->container['frontWheelTrack'];
    }

    /**
    * Sets frontWheelTrack
    *
    * @param string|null $frontWheelTrack 轮距-前。
    *
    * @return $this
    */
    public function setFrontWheelTrack($frontWheelTrack)
    {
        $this->container['frontWheelTrack'] = $frontWheelTrack;
        return $this;
    }

    /**
    * Gets rearWheelTrack
    *  轮距-后。
    *
    * @return string|null
    */
    public function getRearWheelTrack()
    {
        return $this->container['rearWheelTrack'];
    }

    /**
    * Sets rearWheelTrack
    *
    * @param string|null $rearWheelTrack 轮距-后。
    *
    * @return $this
    */
    public function setRearWheelTrack($rearWheelTrack)
    {
        $this->container['rearWheelTrack'] = $rearWheelTrack;
        return $this;
    }

    /**
    * Gets wheelbase
    *  轴距。
    *
    * @return string|null
    */
    public function getWheelbase()
    {
        return $this->container['wheelbase'];
    }

    /**
    * Sets wheelbase
    *
    * @param string|null $wheelbase 轴距。
    *
    * @return $this
    */
    public function setWheelbase($wheelbase)
    {
        $this->container['wheelbase'] = $wheelbase;
        return $this;
    }

    /**
    * Gets axleLoad
    *  轴荷。
    *
    * @return string|null
    */
    public function getAxleLoad()
    {
        return $this->container['axleLoad'];
    }

    /**
    * Sets axleLoad
    *
    * @param string|null $axleLoad 轴荷。
    *
    * @return $this
    */
    public function setAxleLoad($axleLoad)
    {
        $this->container['axleLoad'] = $axleLoad;
        return $this;
    }

    /**
    * Gets axleQuantity
    *  轴数。
    *
    * @return string|null
    */
    public function getAxleQuantity()
    {
        return $this->container['axleQuantity'];
    }

    /**
    * Sets axleQuantity
    *
    * @param string|null $axleQuantity 轴数。
    *
    * @return $this
    */
    public function setAxleQuantity($axleQuantity)
    {
        $this->container['axleQuantity'] = $axleQuantity;
        return $this;
    }

    /**
    * Gets steeringForm
    *  转向形式。
    *
    * @return string|null
    */
    public function getSteeringForm()
    {
        return $this->container['steeringForm'];
    }

    /**
    * Sets steeringForm
    *
    * @param string|null $steeringForm 转向形式。
    *
    * @return $this
    */
    public function setSteeringForm($steeringForm)
    {
        $this->container['steeringForm'] = $steeringForm;
        return $this;
    }

    /**
    * Gets totalWeight
    *  总质量。
    *
    * @return string|null
    */
    public function getTotalWeight()
    {
        return $this->container['totalWeight'];
    }

    /**
    * Sets totalWeight
    *
    * @param string|null $totalWeight 总质量。
    *
    * @return $this
    */
    public function setTotalWeight($totalWeight)
    {
        $this->container['totalWeight'] = $totalWeight;
        return $this;
    }

    /**
    * Gets equipmentWeight
    *  整备质量。
    *
    * @return string|null
    */
    public function getEquipmentWeight()
    {
        return $this->container['equipmentWeight'];
    }

    /**
    * Sets equipmentWeight
    *
    * @param string|null $equipmentWeight 整备质量。
    *
    * @return $this
    */
    public function setEquipmentWeight($equipmentWeight)
    {
        $this->container['equipmentWeight'] = $equipmentWeight;
        return $this;
    }

    /**
    * Gets maximumLadenMass
    *  额定载质量。
    *
    * @return string|null
    */
    public function getMaximumLadenMass()
    {
        return $this->container['maximumLadenMass'];
    }

    /**
    * Sets maximumLadenMass
    *
    * @param string|null $maximumLadenMass 额定载质量。
    *
    * @return $this
    */
    public function setMaximumLadenMass($maximumLadenMass)
    {
        $this->container['maximumLadenMass'] = $maximumLadenMass;
        return $this;
    }

    /**
    * Gets massUtilizationCoefficient
    *  载质量利用系数。
    *
    * @return string|null
    */
    public function getMassUtilizationCoefficient()
    {
        return $this->container['massUtilizationCoefficient'];
    }

    /**
    * Sets massUtilizationCoefficient
    *
    * @param string|null $massUtilizationCoefficient 载质量利用系数。
    *
    * @return $this
    */
    public function setMassUtilizationCoefficient($massUtilizationCoefficient)
    {
        $this->container['massUtilizationCoefficient'] = $massUtilizationCoefficient;
        return $this;
    }

    /**
    * Gets tractionWeight
    *  准牵引总质量。
    *
    * @return string|null
    */
    public function getTractionWeight()
    {
        return $this->container['tractionWeight'];
    }

    /**
    * Sets tractionWeight
    *
    * @param string|null $tractionWeight 准牵引总质量。
    *
    * @return $this
    */
    public function setTractionWeight($tractionWeight)
    {
        $this->container['tractionWeight'] = $tractionWeight;
        return $this;
    }

    /**
    * Gets maximumLoadMass
    *  半挂车鞍座最大允许总质量。
    *
    * @return string|null
    */
    public function getMaximumLoadMass()
    {
        return $this->container['maximumLoadMass'];
    }

    /**
    * Sets maximumLoadMass
    *
    * @param string|null $maximumLoadMass 半挂车鞍座最大允许总质量。
    *
    * @return $this
    */
    public function setMaximumLoadMass($maximumLoadMass)
    {
        $this->container['maximumLoadMass'] = $maximumLoadMass;
        return $this;
    }

    /**
    * Gets cabPassengerCapacity
    *  驾驶室准乘人数。
    *
    * @return string|null
    */
    public function getCabPassengerCapacity()
    {
        return $this->container['cabPassengerCapacity'];
    }

    /**
    * Sets cabPassengerCapacity
    *
    * @param string|null $cabPassengerCapacity 驾驶室准乘人数。
    *
    * @return $this
    */
    public function setCabPassengerCapacity($cabPassengerCapacity)
    {
        $this->container['cabPassengerCapacity'] = $cabPassengerCapacity;
        return $this;
    }

    /**
    * Gets passengerCapacity
    *  额定载客。
    *
    * @return string|null
    */
    public function getPassengerCapacity()
    {
        return $this->container['passengerCapacity'];
    }

    /**
    * Sets passengerCapacity
    *
    * @param string|null $passengerCapacity 额定载客。
    *
    * @return $this
    */
    public function setPassengerCapacity($passengerCapacity)
    {
        $this->container['passengerCapacity'] = $passengerCapacity;
        return $this;
    }

    /**
    * Gets maxDesignSpeed
    *  最高设计车速。
    *
    * @return string|null
    */
    public function getMaxDesignSpeed()
    {
        return $this->container['maxDesignSpeed'];
    }

    /**
    * Sets maxDesignSpeed
    *
    * @param string|null $maxDesignSpeed 最高设计车速。
    *
    * @return $this
    */
    public function setMaxDesignSpeed($maxDesignSpeed)
    {
        $this->container['maxDesignSpeed'] = $maxDesignSpeed;
        return $this;
    }

    /**
    * Gets manufactureDate
    *  车辆制造日期。
    *
    * @return string|null
    */
    public function getManufactureDate()
    {
        return $this->container['manufactureDate'];
    }

    /**
    * Sets manufactureDate
    *
    * @param string|null $manufactureDate 车辆制造日期。
    *
    * @return $this
    */
    public function setManufactureDate($manufactureDate)
    {
        $this->container['manufactureDate'] = $manufactureDate;
        return $this;
    }

    /**
    * Gets confidence
    *  字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    *
    * @return object|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param object|null $confidence 字段的置信度，取值范围0~1。 置信度越大，本次识别的字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于字段的准确率。
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
        return $this;
    }

    /**
    * Gets textLocation
    *  对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 对应所有在原图上识别到的字段位置信息，包含所有文字区域四个顶点的二维坐标（x,y）。采用图像坐标系，坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

