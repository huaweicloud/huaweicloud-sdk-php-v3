<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QualificationCertificateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QualificationCertificateResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * idNumber  身份证号（非必有，依赖对应从业资格证板式）。
    * assessmentDate  考核时间（非必有，依赖对应从业资格证板式）。
    * certificateNumber  从业资格证号。
    * fileNumber  档案号（非必有，依赖对应从业资格证板式）。
    * unionCardNumber  福路通号（非必有，依赖对应从业资格证板式）。
    * continuingEducationInfo  继续教育信息（非必有，依赖对应从业资格证板式）。
    * sex  性别（非必有，依赖对应从业资格证板式）。
    * phoneNumber  联系电话（非必有，依赖对应从业资格证板式）。
    * registrationDate  登记时间（非必有，依赖对应从业资格证板式）。
    * workUnit  单位（非必有，依赖对应从业资格证板式）。
    * integrityAssessmentInfo  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * nationality  国籍（非必有，依赖对应从业资格证板式）。
    * name  姓名。
    * address  住址。
    * drivingClass  准驾车型（非必有，依赖对应从业资格证板式）。
    * issuingAuthority  发证机关（非必有，依赖对应从业资格证板式）。
    * birthDate  出生日期（非必有，依赖对应从业资格证板式）。
    * qualificationCategoryList  从业资格列表。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'idNumber' => 'string',
            'assessmentDate' => 'string',
            'certificateNumber' => 'string',
            'fileNumber' => 'string',
            'unionCardNumber' => 'string',
            'continuingEducationInfo' => 'string',
            'sex' => 'string',
            'phoneNumber' => 'string',
            'registrationDate' => 'string',
            'workUnit' => 'string',
            'integrityAssessmentInfo' => 'string',
            'nationality' => 'string',
            'name' => 'string',
            'address' => 'string',
            'drivingClass' => 'string',
            'issuingAuthority' => 'string',
            'birthDate' => 'string',
            'qualificationCategoryList' => '\HuaweiCloud\SDK\Ocr\V1\Model\QualificationCategory[]',
            'confidence' => '\HuaweiCloud\SDK\Ocr\V1\Model\QualificationConfidence'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * idNumber  身份证号（非必有，依赖对应从业资格证板式）。
    * assessmentDate  考核时间（非必有，依赖对应从业资格证板式）。
    * certificateNumber  从业资格证号。
    * fileNumber  档案号（非必有，依赖对应从业资格证板式）。
    * unionCardNumber  福路通号（非必有，依赖对应从业资格证板式）。
    * continuingEducationInfo  继续教育信息（非必有，依赖对应从业资格证板式）。
    * sex  性别（非必有，依赖对应从业资格证板式）。
    * phoneNumber  联系电话（非必有，依赖对应从业资格证板式）。
    * registrationDate  登记时间（非必有，依赖对应从业资格证板式）。
    * workUnit  单位（非必有，依赖对应从业资格证板式）。
    * integrityAssessmentInfo  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * nationality  国籍（非必有，依赖对应从业资格证板式）。
    * name  姓名。
    * address  住址。
    * drivingClass  准驾车型（非必有，依赖对应从业资格证板式）。
    * issuingAuthority  发证机关（非必有，依赖对应从业资格证板式）。
    * birthDate  出生日期（非必有，依赖对应从业资格证板式）。
    * qualificationCategoryList  从业资格列表。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'idNumber' => null,
        'assessmentDate' => null,
        'certificateNumber' => null,
        'fileNumber' => null,
        'unionCardNumber' => null,
        'continuingEducationInfo' => null,
        'sex' => null,
        'phoneNumber' => null,
        'registrationDate' => null,
        'workUnit' => null,
        'integrityAssessmentInfo' => null,
        'nationality' => null,
        'name' => null,
        'address' => null,
        'drivingClass' => null,
        'issuingAuthority' => null,
        'birthDate' => null,
        'qualificationCategoryList' => null,
        'confidence' => null
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
    * idNumber  身份证号（非必有，依赖对应从业资格证板式）。
    * assessmentDate  考核时间（非必有，依赖对应从业资格证板式）。
    * certificateNumber  从业资格证号。
    * fileNumber  档案号（非必有，依赖对应从业资格证板式）。
    * unionCardNumber  福路通号（非必有，依赖对应从业资格证板式）。
    * continuingEducationInfo  继续教育信息（非必有，依赖对应从业资格证板式）。
    * sex  性别（非必有，依赖对应从业资格证板式）。
    * phoneNumber  联系电话（非必有，依赖对应从业资格证板式）。
    * registrationDate  登记时间（非必有，依赖对应从业资格证板式）。
    * workUnit  单位（非必有，依赖对应从业资格证板式）。
    * integrityAssessmentInfo  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * nationality  国籍（非必有，依赖对应从业资格证板式）。
    * name  姓名。
    * address  住址。
    * drivingClass  准驾车型（非必有，依赖对应从业资格证板式）。
    * issuingAuthority  发证机关（非必有，依赖对应从业资格证板式）。
    * birthDate  出生日期（非必有，依赖对应从业资格证板式）。
    * qualificationCategoryList  从业资格列表。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'idNumber' => 'id_number',
            'assessmentDate' => 'assessment_date',
            'certificateNumber' => 'certificate_number',
            'fileNumber' => 'file_number',
            'unionCardNumber' => 'union_card_number',
            'continuingEducationInfo' => 'continuing_education_info',
            'sex' => 'sex',
            'phoneNumber' => 'phone_number',
            'registrationDate' => 'registration_date',
            'workUnit' => 'work_unit',
            'integrityAssessmentInfo' => 'integrity_assessment_info',
            'nationality' => 'nationality',
            'name' => 'name',
            'address' => 'address',
            'drivingClass' => 'driving_class',
            'issuingAuthority' => 'issuing_authority',
            'birthDate' => 'birth_date',
            'qualificationCategoryList' => 'qualification_category_list',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * idNumber  身份证号（非必有，依赖对应从业资格证板式）。
    * assessmentDate  考核时间（非必有，依赖对应从业资格证板式）。
    * certificateNumber  从业资格证号。
    * fileNumber  档案号（非必有，依赖对应从业资格证板式）。
    * unionCardNumber  福路通号（非必有，依赖对应从业资格证板式）。
    * continuingEducationInfo  继续教育信息（非必有，依赖对应从业资格证板式）。
    * sex  性别（非必有，依赖对应从业资格证板式）。
    * phoneNumber  联系电话（非必有，依赖对应从业资格证板式）。
    * registrationDate  登记时间（非必有，依赖对应从业资格证板式）。
    * workUnit  单位（非必有，依赖对应从业资格证板式）。
    * integrityAssessmentInfo  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * nationality  国籍（非必有，依赖对应从业资格证板式）。
    * name  姓名。
    * address  住址。
    * drivingClass  准驾车型（非必有，依赖对应从业资格证板式）。
    * issuingAuthority  发证机关（非必有，依赖对应从业资格证板式）。
    * birthDate  出生日期（非必有，依赖对应从业资格证板式）。
    * qualificationCategoryList  从业资格列表。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $setters = [
            'idNumber' => 'setIdNumber',
            'assessmentDate' => 'setAssessmentDate',
            'certificateNumber' => 'setCertificateNumber',
            'fileNumber' => 'setFileNumber',
            'unionCardNumber' => 'setUnionCardNumber',
            'continuingEducationInfo' => 'setContinuingEducationInfo',
            'sex' => 'setSex',
            'phoneNumber' => 'setPhoneNumber',
            'registrationDate' => 'setRegistrationDate',
            'workUnit' => 'setWorkUnit',
            'integrityAssessmentInfo' => 'setIntegrityAssessmentInfo',
            'nationality' => 'setNationality',
            'name' => 'setName',
            'address' => 'setAddress',
            'drivingClass' => 'setDrivingClass',
            'issuingAuthority' => 'setIssuingAuthority',
            'birthDate' => 'setBirthDate',
            'qualificationCategoryList' => 'setQualificationCategoryList',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * idNumber  身份证号（非必有，依赖对应从业资格证板式）。
    * assessmentDate  考核时间（非必有，依赖对应从业资格证板式）。
    * certificateNumber  从业资格证号。
    * fileNumber  档案号（非必有，依赖对应从业资格证板式）。
    * unionCardNumber  福路通号（非必有，依赖对应从业资格证板式）。
    * continuingEducationInfo  继续教育信息（非必有，依赖对应从业资格证板式）。
    * sex  性别（非必有，依赖对应从业资格证板式）。
    * phoneNumber  联系电话（非必有，依赖对应从业资格证板式）。
    * registrationDate  登记时间（非必有，依赖对应从业资格证板式）。
    * workUnit  单位（非必有，依赖对应从业资格证板式）。
    * integrityAssessmentInfo  诚信考核信息（非必有，依赖对应从业资格证板式）。
    * nationality  国籍（非必有，依赖对应从业资格证板式）。
    * name  姓名。
    * address  住址。
    * drivingClass  准驾车型（非必有，依赖对应从业资格证板式）。
    * issuingAuthority  发证机关（非必有，依赖对应从业资格证板式）。
    * birthDate  出生日期（非必有，依赖对应从业资格证板式）。
    * qualificationCategoryList  从业资格列表。
    * confidence  confidence
    *
    * @var string[]
    */
    protected static $getters = [
            'idNumber' => 'getIdNumber',
            'assessmentDate' => 'getAssessmentDate',
            'certificateNumber' => 'getCertificateNumber',
            'fileNumber' => 'getFileNumber',
            'unionCardNumber' => 'getUnionCardNumber',
            'continuingEducationInfo' => 'getContinuingEducationInfo',
            'sex' => 'getSex',
            'phoneNumber' => 'getPhoneNumber',
            'registrationDate' => 'getRegistrationDate',
            'workUnit' => 'getWorkUnit',
            'integrityAssessmentInfo' => 'getIntegrityAssessmentInfo',
            'nationality' => 'getNationality',
            'name' => 'getName',
            'address' => 'getAddress',
            'drivingClass' => 'getDrivingClass',
            'issuingAuthority' => 'getIssuingAuthority',
            'birthDate' => 'getBirthDate',
            'qualificationCategoryList' => 'getQualificationCategoryList',
            'confidence' => 'getConfidence'
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
        $this->container['idNumber'] = isset($data['idNumber']) ? $data['idNumber'] : null;
        $this->container['assessmentDate'] = isset($data['assessmentDate']) ? $data['assessmentDate'] : null;
        $this->container['certificateNumber'] = isset($data['certificateNumber']) ? $data['certificateNumber'] : null;
        $this->container['fileNumber'] = isset($data['fileNumber']) ? $data['fileNumber'] : null;
        $this->container['unionCardNumber'] = isset($data['unionCardNumber']) ? $data['unionCardNumber'] : null;
        $this->container['continuingEducationInfo'] = isset($data['continuingEducationInfo']) ? $data['continuingEducationInfo'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['registrationDate'] = isset($data['registrationDate']) ? $data['registrationDate'] : null;
        $this->container['workUnit'] = isset($data['workUnit']) ? $data['workUnit'] : null;
        $this->container['integrityAssessmentInfo'] = isset($data['integrityAssessmentInfo']) ? $data['integrityAssessmentInfo'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['drivingClass'] = isset($data['drivingClass']) ? $data['drivingClass'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['qualificationCategoryList'] = isset($data['qualificationCategoryList']) ? $data['qualificationCategoryList'] : null;
        $this->container['confidence'] = isset($data['confidence']) ? $data['confidence'] : null;
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
    * Gets idNumber
    *  身份证号（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getIdNumber()
    {
        return $this->container['idNumber'];
    }

    /**
    * Sets idNumber
    *
    * @param string|null $idNumber 身份证号（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setIdNumber($idNumber)
    {
        $this->container['idNumber'] = $idNumber;
        return $this;
    }

    /**
    * Gets assessmentDate
    *  考核时间（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getAssessmentDate()
    {
        return $this->container['assessmentDate'];
    }

    /**
    * Sets assessmentDate
    *
    * @param string|null $assessmentDate 考核时间（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setAssessmentDate($assessmentDate)
    {
        $this->container['assessmentDate'] = $assessmentDate;
        return $this;
    }

    /**
    * Gets certificateNumber
    *  从业资格证号。
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
    * @param string|null $certificateNumber 从业资格证号。
    *
    * @return $this
    */
    public function setCertificateNumber($certificateNumber)
    {
        $this->container['certificateNumber'] = $certificateNumber;
        return $this;
    }

    /**
    * Gets fileNumber
    *  档案号（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getFileNumber()
    {
        return $this->container['fileNumber'];
    }

    /**
    * Sets fileNumber
    *
    * @param string|null $fileNumber 档案号（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setFileNumber($fileNumber)
    {
        $this->container['fileNumber'] = $fileNumber;
        return $this;
    }

    /**
    * Gets unionCardNumber
    *  福路通号（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getUnionCardNumber()
    {
        return $this->container['unionCardNumber'];
    }

    /**
    * Sets unionCardNumber
    *
    * @param string|null $unionCardNumber 福路通号（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setUnionCardNumber($unionCardNumber)
    {
        $this->container['unionCardNumber'] = $unionCardNumber;
        return $this;
    }

    /**
    * Gets continuingEducationInfo
    *  继续教育信息（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getContinuingEducationInfo()
    {
        return $this->container['continuingEducationInfo'];
    }

    /**
    * Sets continuingEducationInfo
    *
    * @param string|null $continuingEducationInfo 继续教育信息（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setContinuingEducationInfo($continuingEducationInfo)
    {
        $this->container['continuingEducationInfo'] = $continuingEducationInfo;
        return $this;
    }

    /**
    * Gets sex
    *  性别（非必有，依赖对应从业资格证板式）。
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
    * @param string|null $sex 性别（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets phoneNumber
    *  联系电话（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
    * Sets phoneNumber
    *
    * @param string|null $phoneNumber 联系电话（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setPhoneNumber($phoneNumber)
    {
        $this->container['phoneNumber'] = $phoneNumber;
        return $this;
    }

    /**
    * Gets registrationDate
    *  登记时间（非必有，依赖对应从业资格证板式）。
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
    * @param string|null $registrationDate 登记时间（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setRegistrationDate($registrationDate)
    {
        $this->container['registrationDate'] = $registrationDate;
        return $this;
    }

    /**
    * Gets workUnit
    *  单位（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getWorkUnit()
    {
        return $this->container['workUnit'];
    }

    /**
    * Sets workUnit
    *
    * @param string|null $workUnit 单位（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setWorkUnit($workUnit)
    {
        $this->container['workUnit'] = $workUnit;
        return $this;
    }

    /**
    * Gets integrityAssessmentInfo
    *  诚信考核信息（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getIntegrityAssessmentInfo()
    {
        return $this->container['integrityAssessmentInfo'];
    }

    /**
    * Sets integrityAssessmentInfo
    *
    * @param string|null $integrityAssessmentInfo 诚信考核信息（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setIntegrityAssessmentInfo($integrityAssessmentInfo)
    {
        $this->container['integrityAssessmentInfo'] = $integrityAssessmentInfo;
        return $this;
    }

    /**
    * Gets nationality
    *  国籍（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getNationality()
    {
        return $this->container['nationality'];
    }

    /**
    * Sets nationality
    *
    * @param string|null $nationality 国籍（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
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
    * Gets address
    *  住址。
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
    * @param string|null $address 住址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets drivingClass
    *  准驾车型（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getDrivingClass()
    {
        return $this->container['drivingClass'];
    }

    /**
    * Sets drivingClass
    *
    * @param string|null $drivingClass 准驾车型（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setDrivingClass($drivingClass)
    {
        $this->container['drivingClass'] = $drivingClass;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  发证机关（非必有，依赖对应从业资格证板式）。
    *
    * @return string|null
    */
    public function getIssuingAuthority()
    {
        return $this->container['issuingAuthority'];
    }

    /**
    * Sets issuingAuthority
    *
    * @param string|null $issuingAuthority 发证机关（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets birthDate
    *  出生日期（非必有，依赖对应从业资格证板式）。
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
    * @param string|null $birthDate 出生日期（非必有，依赖对应从业资格证板式）。
    *
    * @return $this
    */
    public function setBirthDate($birthDate)
    {
        $this->container['birthDate'] = $birthDate;
        return $this;
    }

    /**
    * Gets qualificationCategoryList
    *  从业资格列表。
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\QualificationCategory[]|null
    */
    public function getQualificationCategoryList()
    {
        return $this->container['qualificationCategoryList'];
    }

    /**
    * Sets qualificationCategoryList
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\QualificationCategory[]|null $qualificationCategoryList 从业资格列表。
    *
    * @return $this
    */
    public function setQualificationCategoryList($qualificationCategoryList)
    {
        $this->container['qualificationCategoryList'] = $qualificationCategoryList;
        return $this;
    }

    /**
    * Gets confidence
    *  confidence
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\QualificationConfidence|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\QualificationConfidence|null $confidence confidence
    *
    * @return $this
    */
    public function setConfidence($confidence)
    {
        $this->container['confidence'] = $confidence;
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

