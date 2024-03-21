<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HouseholdRegisterContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HouseholdRegisterContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名。
    * householderRelationship  户主或与户主关系。
    * formerName  曾用名。
    * sex  性别。
    * birthplace  出生地。
    * ethnicity  民族。
    * originPlace  籍贯。
    * birthDate  出生日期。
    * otherAddress  本市(县)其他住址。
    * religiousBelief  宗教信仰。
    * idCardNumber  公民身份证件编号。
    * height  身高。
    * bloodType  血型。
    * education  文化程度。
    * maritalStatus  婚姻状况。
    * militaryServiceStatus  兵役情况。
    * workPlace  服务处所。
    * occupation  职业。
    * migratedToCity  何时由何地迁来本市(县)。
    * migratedToAddress  何时由何地迁来本址。
    * registrarSignatureSeal  承办人签章。
    * registrationDate  登记日期。
    * householdType  户别。
    * householdNumber  户号。
    * householderName  户主姓名。当type参数为“首页”时，返回此参数。
    * community  社区。当type参数为“首页”时，返回此参数。
    * address  住址。当type参数为“首页”时，返回此参数。
    * issueDate  签发日期。当type参数为“首页”时，返回此参数。
    * policeStation  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'householderRelationship' => 'string',
            'formerName' => 'string',
            'sex' => 'string',
            'birthplace' => 'string',
            'ethnicity' => 'string',
            'originPlace' => 'string',
            'birthDate' => 'string',
            'otherAddress' => 'string',
            'religiousBelief' => 'string',
            'idCardNumber' => 'string',
            'height' => 'string',
            'bloodType' => 'string',
            'education' => 'string',
            'maritalStatus' => 'string',
            'militaryServiceStatus' => 'string',
            'workPlace' => 'string',
            'occupation' => 'string',
            'migratedToCity' => 'string',
            'migratedToAddress' => 'string',
            'registrarSignatureSeal' => 'string',
            'registrationDate' => 'string',
            'householdType' => 'string',
            'householdNumber' => 'string',
            'householderName' => 'string',
            'community' => 'string',
            'address' => 'string',
            'issueDate' => 'string',
            'policeStation' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名。
    * householderRelationship  户主或与户主关系。
    * formerName  曾用名。
    * sex  性别。
    * birthplace  出生地。
    * ethnicity  民族。
    * originPlace  籍贯。
    * birthDate  出生日期。
    * otherAddress  本市(县)其他住址。
    * religiousBelief  宗教信仰。
    * idCardNumber  公民身份证件编号。
    * height  身高。
    * bloodType  血型。
    * education  文化程度。
    * maritalStatus  婚姻状况。
    * militaryServiceStatus  兵役情况。
    * workPlace  服务处所。
    * occupation  职业。
    * migratedToCity  何时由何地迁来本市(县)。
    * migratedToAddress  何时由何地迁来本址。
    * registrarSignatureSeal  承办人签章。
    * registrationDate  登记日期。
    * householdType  户别。
    * householdNumber  户号。
    * householderName  户主姓名。当type参数为“首页”时，返回此参数。
    * community  社区。当type参数为“首页”时，返回此参数。
    * address  住址。当type参数为“首页”时，返回此参数。
    * issueDate  签发日期。当type参数为“首页”时，返回此参数。
    * policeStation  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'householderRelationship' => null,
        'formerName' => null,
        'sex' => null,
        'birthplace' => null,
        'ethnicity' => null,
        'originPlace' => null,
        'birthDate' => null,
        'otherAddress' => null,
        'religiousBelief' => null,
        'idCardNumber' => null,
        'height' => null,
        'bloodType' => null,
        'education' => null,
        'maritalStatus' => null,
        'militaryServiceStatus' => null,
        'workPlace' => null,
        'occupation' => null,
        'migratedToCity' => null,
        'migratedToAddress' => null,
        'registrarSignatureSeal' => null,
        'registrationDate' => null,
        'householdType' => null,
        'householdNumber' => null,
        'householderName' => null,
        'community' => null,
        'address' => null,
        'issueDate' => null,
        'policeStation' => null
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
    * name  姓名。
    * householderRelationship  户主或与户主关系。
    * formerName  曾用名。
    * sex  性别。
    * birthplace  出生地。
    * ethnicity  民族。
    * originPlace  籍贯。
    * birthDate  出生日期。
    * otherAddress  本市(县)其他住址。
    * religiousBelief  宗教信仰。
    * idCardNumber  公民身份证件编号。
    * height  身高。
    * bloodType  血型。
    * education  文化程度。
    * maritalStatus  婚姻状况。
    * militaryServiceStatus  兵役情况。
    * workPlace  服务处所。
    * occupation  职业。
    * migratedToCity  何时由何地迁来本市(县)。
    * migratedToAddress  何时由何地迁来本址。
    * registrarSignatureSeal  承办人签章。
    * registrationDate  登记日期。
    * householdType  户别。
    * householdNumber  户号。
    * householderName  户主姓名。当type参数为“首页”时，返回此参数。
    * community  社区。当type参数为“首页”时，返回此参数。
    * address  住址。当type参数为“首页”时，返回此参数。
    * issueDate  签发日期。当type参数为“首页”时，返回此参数。
    * policeStation  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'householderRelationship' => 'householder_relationship',
            'formerName' => 'former_name',
            'sex' => 'sex',
            'birthplace' => 'birthplace',
            'ethnicity' => 'ethnicity',
            'originPlace' => 'origin_place',
            'birthDate' => 'birth_date',
            'otherAddress' => 'other_address',
            'religiousBelief' => 'religious_belief',
            'idCardNumber' => 'id_card_number',
            'height' => 'height',
            'bloodType' => 'blood_type',
            'education' => 'education',
            'maritalStatus' => 'marital_status',
            'militaryServiceStatus' => 'military_service_status',
            'workPlace' => 'work_place',
            'occupation' => 'occupation',
            'migratedToCity' => 'migrated_to_city',
            'migratedToAddress' => 'migrated_to_address',
            'registrarSignatureSeal' => 'registrar_signature_seal',
            'registrationDate' => 'registration_date',
            'householdType' => 'household_type',
            'householdNumber' => 'household_number',
            'householderName' => 'householder_name',
            'community' => 'community',
            'address' => 'address',
            'issueDate' => 'issue_date',
            'policeStation' => 'police_station'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名。
    * householderRelationship  户主或与户主关系。
    * formerName  曾用名。
    * sex  性别。
    * birthplace  出生地。
    * ethnicity  民族。
    * originPlace  籍贯。
    * birthDate  出生日期。
    * otherAddress  本市(县)其他住址。
    * religiousBelief  宗教信仰。
    * idCardNumber  公民身份证件编号。
    * height  身高。
    * bloodType  血型。
    * education  文化程度。
    * maritalStatus  婚姻状况。
    * militaryServiceStatus  兵役情况。
    * workPlace  服务处所。
    * occupation  职业。
    * migratedToCity  何时由何地迁来本市(县)。
    * migratedToAddress  何时由何地迁来本址。
    * registrarSignatureSeal  承办人签章。
    * registrationDate  登记日期。
    * householdType  户别。
    * householdNumber  户号。
    * householderName  户主姓名。当type参数为“首页”时，返回此参数。
    * community  社区。当type参数为“首页”时，返回此参数。
    * address  住址。当type参数为“首页”时，返回此参数。
    * issueDate  签发日期。当type参数为“首页”时，返回此参数。
    * policeStation  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'householderRelationship' => 'setHouseholderRelationship',
            'formerName' => 'setFormerName',
            'sex' => 'setSex',
            'birthplace' => 'setBirthplace',
            'ethnicity' => 'setEthnicity',
            'originPlace' => 'setOriginPlace',
            'birthDate' => 'setBirthDate',
            'otherAddress' => 'setOtherAddress',
            'religiousBelief' => 'setReligiousBelief',
            'idCardNumber' => 'setIdCardNumber',
            'height' => 'setHeight',
            'bloodType' => 'setBloodType',
            'education' => 'setEducation',
            'maritalStatus' => 'setMaritalStatus',
            'militaryServiceStatus' => 'setMilitaryServiceStatus',
            'workPlace' => 'setWorkPlace',
            'occupation' => 'setOccupation',
            'migratedToCity' => 'setMigratedToCity',
            'migratedToAddress' => 'setMigratedToAddress',
            'registrarSignatureSeal' => 'setRegistrarSignatureSeal',
            'registrationDate' => 'setRegistrationDate',
            'householdType' => 'setHouseholdType',
            'householdNumber' => 'setHouseholdNumber',
            'householderName' => 'setHouseholderName',
            'community' => 'setCommunity',
            'address' => 'setAddress',
            'issueDate' => 'setIssueDate',
            'policeStation' => 'setPoliceStation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名。
    * householderRelationship  户主或与户主关系。
    * formerName  曾用名。
    * sex  性别。
    * birthplace  出生地。
    * ethnicity  民族。
    * originPlace  籍贯。
    * birthDate  出生日期。
    * otherAddress  本市(县)其他住址。
    * religiousBelief  宗教信仰。
    * idCardNumber  公民身份证件编号。
    * height  身高。
    * bloodType  血型。
    * education  文化程度。
    * maritalStatus  婚姻状况。
    * militaryServiceStatus  兵役情况。
    * workPlace  服务处所。
    * occupation  职业。
    * migratedToCity  何时由何地迁来本市(县)。
    * migratedToAddress  何时由何地迁来本址。
    * registrarSignatureSeal  承办人签章。
    * registrationDate  登记日期。
    * householdType  户别。
    * householdNumber  户号。
    * householderName  户主姓名。当type参数为“首页”时，返回此参数。
    * community  社区。当type参数为“首页”时，返回此参数。
    * address  住址。当type参数为“首页”时，返回此参数。
    * issueDate  签发日期。当type参数为“首页”时，返回此参数。
    * policeStation  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'householderRelationship' => 'getHouseholderRelationship',
            'formerName' => 'getFormerName',
            'sex' => 'getSex',
            'birthplace' => 'getBirthplace',
            'ethnicity' => 'getEthnicity',
            'originPlace' => 'getOriginPlace',
            'birthDate' => 'getBirthDate',
            'otherAddress' => 'getOtherAddress',
            'religiousBelief' => 'getReligiousBelief',
            'idCardNumber' => 'getIdCardNumber',
            'height' => 'getHeight',
            'bloodType' => 'getBloodType',
            'education' => 'getEducation',
            'maritalStatus' => 'getMaritalStatus',
            'militaryServiceStatus' => 'getMilitaryServiceStatus',
            'workPlace' => 'getWorkPlace',
            'occupation' => 'getOccupation',
            'migratedToCity' => 'getMigratedToCity',
            'migratedToAddress' => 'getMigratedToAddress',
            'registrarSignatureSeal' => 'getRegistrarSignatureSeal',
            'registrationDate' => 'getRegistrationDate',
            'householdType' => 'getHouseholdType',
            'householdNumber' => 'getHouseholdNumber',
            'householderName' => 'getHouseholderName',
            'community' => 'getCommunity',
            'address' => 'getAddress',
            'issueDate' => 'getIssueDate',
            'policeStation' => 'getPoliceStation'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['householderRelationship'] = isset($data['householderRelationship']) ? $data['householderRelationship'] : null;
        $this->container['formerName'] = isset($data['formerName']) ? $data['formerName'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birthplace'] = isset($data['birthplace']) ? $data['birthplace'] : null;
        $this->container['ethnicity'] = isset($data['ethnicity']) ? $data['ethnicity'] : null;
        $this->container['originPlace'] = isset($data['originPlace']) ? $data['originPlace'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['otherAddress'] = isset($data['otherAddress']) ? $data['otherAddress'] : null;
        $this->container['religiousBelief'] = isset($data['religiousBelief']) ? $data['religiousBelief'] : null;
        $this->container['idCardNumber'] = isset($data['idCardNumber']) ? $data['idCardNumber'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['bloodType'] = isset($data['bloodType']) ? $data['bloodType'] : null;
        $this->container['education'] = isset($data['education']) ? $data['education'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['militaryServiceStatus'] = isset($data['militaryServiceStatus']) ? $data['militaryServiceStatus'] : null;
        $this->container['workPlace'] = isset($data['workPlace']) ? $data['workPlace'] : null;
        $this->container['occupation'] = isset($data['occupation']) ? $data['occupation'] : null;
        $this->container['migratedToCity'] = isset($data['migratedToCity']) ? $data['migratedToCity'] : null;
        $this->container['migratedToAddress'] = isset($data['migratedToAddress']) ? $data['migratedToAddress'] : null;
        $this->container['registrarSignatureSeal'] = isset($data['registrarSignatureSeal']) ? $data['registrarSignatureSeal'] : null;
        $this->container['registrationDate'] = isset($data['registrationDate']) ? $data['registrationDate'] : null;
        $this->container['householdType'] = isset($data['householdType']) ? $data['householdType'] : null;
        $this->container['householdNumber'] = isset($data['householdNumber']) ? $data['householdNumber'] : null;
        $this->container['householderName'] = isset($data['householderName']) ? $data['householderName'] : null;
        $this->container['community'] = isset($data['community']) ? $data['community'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['policeStation'] = isset($data['policeStation']) ? $data['policeStation'] : null;
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
    * Gets name
    *  姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets householderRelationship
    *  户主或与户主关系。
    *
    * @return string|null
    */
    public function getHouseholderRelationship()
    {
        return $this->container['householderRelationship'];
    }

    /**
    * Sets householderRelationship
    *
    * @param string|null $householderRelationship 户主或与户主关系。
    *
    * @return $this
    */
    public function setHouseholderRelationship($householderRelationship)
    {
        $this->container['householderRelationship'] = $householderRelationship;
        return $this;
    }

    /**
    * Gets formerName
    *  曾用名。
    *
    * @return string|null
    */
    public function getFormerName()
    {
        return $this->container['formerName'];
    }

    /**
    * Sets formerName
    *
    * @param string|null $formerName 曾用名。
    *
    * @return $this
    */
    public function setFormerName($formerName)
    {
        $this->container['formerName'] = $formerName;
        return $this;
    }

    /**
    * Gets sex
    *  性别。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets birthplace
    *  出生地。
    *
    * @return string|null
    */
    public function getBirthplace()
    {
        return $this->container['birthplace'];
    }

    /**
    * Sets birthplace
    *
    * @param string|null $birthplace 出生地。
    *
    * @return $this
    */
    public function setBirthplace($birthplace)
    {
        $this->container['birthplace'] = $birthplace;
        return $this;
    }

    /**
    * Gets ethnicity
    *  民族。
    *
    * @return string|null
    */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
    * Sets ethnicity
    *
    * @param string|null $ethnicity 民族。
    *
    * @return $this
    */
    public function setEthnicity($ethnicity)
    {
        $this->container['ethnicity'] = $ethnicity;
        return $this;
    }

    /**
    * Gets originPlace
    *  籍贯。
    *
    * @return string|null
    */
    public function getOriginPlace()
    {
        return $this->container['originPlace'];
    }

    /**
    * Sets originPlace
    *
    * @param string|null $originPlace 籍贯。
    *
    * @return $this
    */
    public function setOriginPlace($originPlace)
    {
        $this->container['originPlace'] = $originPlace;
        return $this;
    }

    /**
    * Gets birthDate
    *  出生日期。
    *
    * @return string|null
    */
    public function getBirthDate()
    {
        return $this->container['birthDate'];
    }

    /**
    * Sets birthDate
    *
    * @param string|null $birthDate 出生日期。
    *
    * @return $this
    */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;
        return $this;
    }

    /**
    * Gets otherAddress
    *  本市(县)其他住址。
    *
    * @return string|null
    */
    public function getOtherAddress()
    {
        return $this->container['otherAddress'];
    }

    /**
    * Sets otherAddress
    *
    * @param string|null $otherAddress 本市(县)其他住址。
    *
    * @return $this
    */
    public function setOtherAddress($otherAddress)
    {
        $this->container['otherAddress'] = $otherAddress;
        return $this;
    }

    /**
    * Gets religiousBelief
    *  宗教信仰。
    *
    * @return string|null
    */
    public function getReligiousBelief()
    {
        return $this->container['religiousBelief'];
    }

    /**
    * Sets religiousBelief
    *
    * @param string|null $religiousBelief 宗教信仰。
    *
    * @return $this
    */
    public function setReligiousBelief($religiousBelief)
    {
        $this->container['religiousBelief'] = $religiousBelief;
        return $this;
    }

    /**
    * Gets idCardNumber
    *  公民身份证件编号。
    *
    * @return string|null
    */
    public function getIdCardNumber()
    {
        return $this->container['idCardNumber'];
    }

    /**
    * Sets idCardNumber
    *
    * @param string|null $idCardNumber 公民身份证件编号。
    *
    * @return $this
    */
    public function setIdCardNumber($idCardNumber)
    {
        $this->container['idCardNumber'] = $idCardNumber;
        return $this;
    }

    /**
    * Gets height
    *  身高。
    *
    * @return string|null
    */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
    * Sets height
    *
    * @param string|null $height 身高。
    *
    * @return $this
    */
    public function setHeight($height)
    {
        $this->container['height'] = $height;
        return $this;
    }

    /**
    * Gets bloodType
    *  血型。
    *
    * @return string|null
    */
    public function getBloodType()
    {
        return $this->container['bloodType'];
    }

    /**
    * Sets bloodType
    *
    * @param string|null $bloodType 血型。
    *
    * @return $this
    */
    public function setBloodType($bloodType)
    {
        $this->container['bloodType'] = $bloodType;
        return $this;
    }

    /**
    * Gets education
    *  文化程度。
    *
    * @return string|null
    */
    public function getEducation()
    {
        return $this->container['education'];
    }

    /**
    * Sets education
    *
    * @param string|null $education 文化程度。
    *
    * @return $this
    */
    public function setEducation($education)
    {
        $this->container['education'] = $education;
        return $this;
    }

    /**
    * Gets maritalStatus
    *  婚姻状况。
    *
    * @return string|null
    */
    public function getMaritalStatus()
    {
        return $this->container['maritalStatus'];
    }

    /**
    * Sets maritalStatus
    *
    * @param string|null $maritalStatus 婚姻状况。
    *
    * @return $this
    */
    public function setMaritalStatus($maritalStatus)
    {
        $this->container['maritalStatus'] = $maritalStatus;
        return $this;
    }

    /**
    * Gets militaryServiceStatus
    *  兵役情况。
    *
    * @return string|null
    */
    public function getMilitaryServiceStatus()
    {
        return $this->container['militaryServiceStatus'];
    }

    /**
    * Sets militaryServiceStatus
    *
    * @param string|null $militaryServiceStatus 兵役情况。
    *
    * @return $this
    */
    public function setMilitaryServiceStatus($militaryServiceStatus)
    {
        $this->container['militaryServiceStatus'] = $militaryServiceStatus;
        return $this;
    }

    /**
    * Gets workPlace
    *  服务处所。
    *
    * @return string|null
    */
    public function getWorkPlace()
    {
        return $this->container['workPlace'];
    }

    /**
    * Sets workPlace
    *
    * @param string|null $workPlace 服务处所。
    *
    * @return $this
    */
    public function setWorkPlace($workPlace)
    {
        $this->container['workPlace'] = $workPlace;
        return $this;
    }

    /**
    * Gets occupation
    *  职业。
    *
    * @return string|null
    */
    public function getOccupation()
    {
        return $this->container['occupation'];
    }

    /**
    * Sets occupation
    *
    * @param string|null $occupation 职业。
    *
    * @return $this
    */
    public function setOccupation($occupation)
    {
        $this->container['occupation'] = $occupation;
        return $this;
    }

    /**
    * Gets migratedToCity
    *  何时由何地迁来本市(县)。
    *
    * @return string|null
    */
    public function getMigratedToCity()
    {
        return $this->container['migratedToCity'];
    }

    /**
    * Sets migratedToCity
    *
    * @param string|null $migratedToCity 何时由何地迁来本市(县)。
    *
    * @return $this
    */
    public function setMigratedToCity($migratedToCity)
    {
        $this->container['migratedToCity'] = $migratedToCity;
        return $this;
    }

    /**
    * Gets migratedToAddress
    *  何时由何地迁来本址。
    *
    * @return string|null
    */
    public function getMigratedToAddress()
    {
        return $this->container['migratedToAddress'];
    }

    /**
    * Sets migratedToAddress
    *
    * @param string|null $migratedToAddress 何时由何地迁来本址。
    *
    * @return $this
    */
    public function setMigratedToAddress($migratedToAddress)
    {
        $this->container['migratedToAddress'] = $migratedToAddress;
        return $this;
    }

    /**
    * Gets registrarSignatureSeal
    *  承办人签章。
    *
    * @return string|null
    */
    public function getRegistrarSignatureSeal()
    {
        return $this->container['registrarSignatureSeal'];
    }

    /**
    * Sets registrarSignatureSeal
    *
    * @param string|null $registrarSignatureSeal 承办人签章。
    *
    * @return $this
    */
    public function setRegistrarSignatureSeal($registrarSignatureSeal)
    {
        $this->container['registrarSignatureSeal'] = $registrarSignatureSeal;
        return $this;
    }

    /**
    * Gets registrationDate
    *  登记日期。
    *
    * @return string|null
    */
    public function getRegistrationDate()
    {
        return $this->container['registrationDate'];
    }

    /**
    * Sets registrationDate
    *
    * @param string|null $registrationDate 登记日期。
    *
    * @return $this
    */
    public function setRegistrationDate($registrationDate)
    {
        $this->container['registrationDate'] = $registrationDate;
        return $this;
    }

    /**
    * Gets householdType
    *  户别。
    *
    * @return string|null
    */
    public function getHouseholdType()
    {
        return $this->container['householdType'];
    }

    /**
    * Sets householdType
    *
    * @param string|null $householdType 户别。
    *
    * @return $this
    */
    public function setHouseholdType($householdType)
    {
        $this->container['householdType'] = $householdType;
        return $this;
    }

    /**
    * Gets householdNumber
    *  户号。
    *
    * @return string|null
    */
    public function getHouseholdNumber()
    {
        return $this->container['householdNumber'];
    }

    /**
    * Sets householdNumber
    *
    * @param string|null $householdNumber 户号。
    *
    * @return $this
    */
    public function setHouseholdNumber($householdNumber)
    {
        $this->container['householdNumber'] = $householdNumber;
        return $this;
    }

    /**
    * Gets householderName
    *  户主姓名。当type参数为“首页”时，返回此参数。
    *
    * @return string|null
    */
    public function getHouseholderName()
    {
        return $this->container['householderName'];
    }

    /**
    * Sets householderName
    *
    * @param string|null $householderName 户主姓名。当type参数为“首页”时，返回此参数。
    *
    * @return $this
    */
    public function setHouseholderName($householderName)
    {
        $this->container['householderName'] = $householderName;
        return $this;
    }

    /**
    * Gets community
    *  社区。当type参数为“首页”时，返回此参数。
    *
    * @return string|null
    */
    public function getCommunity()
    {
        return $this->container['community'];
    }

    /**
    * Sets community
    *
    * @param string|null $community 社区。当type参数为“首页”时，返回此参数。
    *
    * @return $this
    */
    public function setCommunity($community)
    {
        $this->container['community'] = $community;
        return $this;
    }

    /**
    * Gets address
    *  住址。当type参数为“首页”时，返回此参数。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 住址。当type参数为“首页”时，返回此参数。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发日期。当type参数为“首页”时，返回此参数。
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
    * @param string|null $issueDate 签发日期。当type参数为“首页”时，返回此参数。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets policeStation
    *  户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @return string|null
    */
    public function getPoliceStation()
    {
        return $this->container['policeStation'];
    }

    /**
    * Sets policeStation
    *
    * @param string|null $policeStation 户口登记机关。当type参数为“首页”时，返回此参数。
    *
    * @return $this
    */
    public function setPoliceStation($policeStation)
    {
        $this->container['policeStation'] = $policeStation;
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

