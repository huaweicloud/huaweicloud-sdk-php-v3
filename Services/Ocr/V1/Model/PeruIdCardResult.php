<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeruIdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeruIdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cuiNumber  身份证号。
    * firstSurname  第一姓氏。
    * secondSurname  第二姓氏。
    * givenName  名。
    * sex  性别。
    * maritalStatus  婚姻状况。
    * birthDate  出生日期。
    * nationality  国籍。
    * issueDate  发行日期。
    * expiryDate  失效日期。
    * birthPlace  出生地编码。
    * votingGroup  投票组。
    * organDonation  器官捐赠意愿。
    * registrationDate  注册日期。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * address  地址。
    * department  大区。
    * province  省。
    * district  区。
    * remarks  备注。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * duplicate  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cuiNumber' => 'string',
            'firstSurname' => 'string',
            'secondSurname' => 'string',
            'givenName' => 'string',
            'sex' => 'string',
            'maritalStatus' => 'string',
            'birthDate' => 'string',
            'nationality' => 'string',
            'issueDate' => 'string',
            'expiryDate' => 'string',
            'birthPlace' => 'string',
            'votingGroup' => 'string',
            'organDonation' => 'string',
            'registrationDate' => 'string',
            'portraitImage' => 'string',
            'portraitLocation' => 'int[][]',
            'address' => 'string',
            'department' => 'string',
            'province' => 'string',
            'district' => 'string',
            'remarks' => 'string',
            'machineCode1' => 'string',
            'machineCode2' => 'string',
            'machineCode3' => 'string',
            'duplicate' => 'bool',
            'confidence' => 'map[string,float]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cuiNumber  身份证号。
    * firstSurname  第一姓氏。
    * secondSurname  第二姓氏。
    * givenName  名。
    * sex  性别。
    * maritalStatus  婚姻状况。
    * birthDate  出生日期。
    * nationality  国籍。
    * issueDate  发行日期。
    * expiryDate  失效日期。
    * birthPlace  出生地编码。
    * votingGroup  投票组。
    * organDonation  器官捐赠意愿。
    * registrationDate  注册日期。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * address  地址。
    * department  大区。
    * province  省。
    * district  区。
    * remarks  备注。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * duplicate  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cuiNumber' => null,
        'firstSurname' => null,
        'secondSurname' => null,
        'givenName' => null,
        'sex' => null,
        'maritalStatus' => null,
        'birthDate' => null,
        'nationality' => null,
        'issueDate' => null,
        'expiryDate' => null,
        'birthPlace' => null,
        'votingGroup' => null,
        'organDonation' => null,
        'registrationDate' => null,
        'portraitImage' => null,
        'portraitLocation' => 'int32',
        'address' => null,
        'department' => null,
        'province' => null,
        'district' => null,
        'remarks' => null,
        'machineCode1' => null,
        'machineCode2' => null,
        'machineCode3' => null,
        'duplicate' => null,
        'confidence' => 'float'
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
    * cuiNumber  身份证号。
    * firstSurname  第一姓氏。
    * secondSurname  第二姓氏。
    * givenName  名。
    * sex  性别。
    * maritalStatus  婚姻状况。
    * birthDate  出生日期。
    * nationality  国籍。
    * issueDate  发行日期。
    * expiryDate  失效日期。
    * birthPlace  出生地编码。
    * votingGroup  投票组。
    * organDonation  器官捐赠意愿。
    * registrationDate  注册日期。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * address  地址。
    * department  大区。
    * province  省。
    * district  区。
    * remarks  备注。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * duplicate  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cuiNumber' => 'cui_number',
            'firstSurname' => 'first_surname',
            'secondSurname' => 'second_surname',
            'givenName' => 'given_name',
            'sex' => 'sex',
            'maritalStatus' => 'marital_status',
            'birthDate' => 'birth_date',
            'nationality' => 'nationality',
            'issueDate' => 'issue_date',
            'expiryDate' => 'expiry_date',
            'birthPlace' => 'birth_place',
            'votingGroup' => 'voting_group',
            'organDonation' => 'organ_donation',
            'registrationDate' => 'registration_date',
            'portraitImage' => 'portrait_image',
            'portraitLocation' => 'portrait_location',
            'address' => 'address',
            'department' => 'department',
            'province' => 'province',
            'district' => 'district',
            'remarks' => 'remarks',
            'machineCode1' => 'machine_code1',
            'machineCode2' => 'machine_code2',
            'machineCode3' => 'machine_code3',
            'duplicate' => 'duplicate',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cuiNumber  身份证号。
    * firstSurname  第一姓氏。
    * secondSurname  第二姓氏。
    * givenName  名。
    * sex  性别。
    * maritalStatus  婚姻状况。
    * birthDate  出生日期。
    * nationality  国籍。
    * issueDate  发行日期。
    * expiryDate  失效日期。
    * birthPlace  出生地编码。
    * votingGroup  投票组。
    * organDonation  器官捐赠意愿。
    * registrationDate  注册日期。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * address  地址。
    * department  大区。
    * province  省。
    * district  区。
    * remarks  备注。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * duplicate  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'cuiNumber' => 'setCuiNumber',
            'firstSurname' => 'setFirstSurname',
            'secondSurname' => 'setSecondSurname',
            'givenName' => 'setGivenName',
            'sex' => 'setSex',
            'maritalStatus' => 'setMaritalStatus',
            'birthDate' => 'setBirthDate',
            'nationality' => 'setNationality',
            'issueDate' => 'setIssueDate',
            'expiryDate' => 'setExpiryDate',
            'birthPlace' => 'setBirthPlace',
            'votingGroup' => 'setVotingGroup',
            'organDonation' => 'setOrganDonation',
            'registrationDate' => 'setRegistrationDate',
            'portraitImage' => 'setPortraitImage',
            'portraitLocation' => 'setPortraitLocation',
            'address' => 'setAddress',
            'department' => 'setDepartment',
            'province' => 'setProvince',
            'district' => 'setDistrict',
            'remarks' => 'setRemarks',
            'machineCode1' => 'setMachineCode1',
            'machineCode2' => 'setMachineCode2',
            'machineCode3' => 'setMachineCode3',
            'duplicate' => 'setDuplicate',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cuiNumber  身份证号。
    * firstSurname  第一姓氏。
    * secondSurname  第二姓氏。
    * givenName  名。
    * sex  性别。
    * maritalStatus  婚姻状况。
    * birthDate  出生日期。
    * nationality  国籍。
    * issueDate  发行日期。
    * expiryDate  失效日期。
    * birthPlace  出生地编码。
    * votingGroup  投票组。
    * organDonation  器官捐赠意愿。
    * registrationDate  注册日期。
    * portraitImage  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    * portraitLocation  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    * address  地址。
    * department  大区。
    * province  省。
    * district  区。
    * remarks  备注。
    * machineCode1  机器码第一行。
    * machineCode2  机器码第二行。
    * machineCode3  机器码第三行。
    * duplicate  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'cuiNumber' => 'getCuiNumber',
            'firstSurname' => 'getFirstSurname',
            'secondSurname' => 'getSecondSurname',
            'givenName' => 'getGivenName',
            'sex' => 'getSex',
            'maritalStatus' => 'getMaritalStatus',
            'birthDate' => 'getBirthDate',
            'nationality' => 'getNationality',
            'issueDate' => 'getIssueDate',
            'expiryDate' => 'getExpiryDate',
            'birthPlace' => 'getBirthPlace',
            'votingGroup' => 'getVotingGroup',
            'organDonation' => 'getOrganDonation',
            'registrationDate' => 'getRegistrationDate',
            'portraitImage' => 'getPortraitImage',
            'portraitLocation' => 'getPortraitLocation',
            'address' => 'getAddress',
            'department' => 'getDepartment',
            'province' => 'getProvince',
            'district' => 'getDistrict',
            'remarks' => 'getRemarks',
            'machineCode1' => 'getMachineCode1',
            'machineCode2' => 'getMachineCode2',
            'machineCode3' => 'getMachineCode3',
            'duplicate' => 'getDuplicate',
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
        $this->container['cuiNumber'] = isset($data['cuiNumber']) ? $data['cuiNumber'] : null;
        $this->container['firstSurname'] = isset($data['firstSurname']) ? $data['firstSurname'] : null;
        $this->container['secondSurname'] = isset($data['secondSurname']) ? $data['secondSurname'] : null;
        $this->container['givenName'] = isset($data['givenName']) ? $data['givenName'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['maritalStatus'] = isset($data['maritalStatus']) ? $data['maritalStatus'] : null;
        $this->container['birthDate'] = isset($data['birthDate']) ? $data['birthDate'] : null;
        $this->container['nationality'] = isset($data['nationality']) ? $data['nationality'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['birthPlace'] = isset($data['birthPlace']) ? $data['birthPlace'] : null;
        $this->container['votingGroup'] = isset($data['votingGroup']) ? $data['votingGroup'] : null;
        $this->container['organDonation'] = isset($data['organDonation']) ? $data['organDonation'] : null;
        $this->container['registrationDate'] = isset($data['registrationDate']) ? $data['registrationDate'] : null;
        $this->container['portraitImage'] = isset($data['portraitImage']) ? $data['portraitImage'] : null;
        $this->container['portraitLocation'] = isset($data['portraitLocation']) ? $data['portraitLocation'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['department'] = isset($data['department']) ? $data['department'] : null;
        $this->container['province'] = isset($data['province']) ? $data['province'] : null;
        $this->container['district'] = isset($data['district']) ? $data['district'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['machineCode1'] = isset($data['machineCode1']) ? $data['machineCode1'] : null;
        $this->container['machineCode2'] = isset($data['machineCode2']) ? $data['machineCode2'] : null;
        $this->container['machineCode3'] = isset($data['machineCode3']) ? $data['machineCode3'] : null;
        $this->container['duplicate'] = isset($data['duplicate']) ? $data['duplicate'] : null;
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
    * Gets cuiNumber
    *  身份证号。
    *
    * @return string|null
    */
    public function getCuiNumber()
    {
        return $this->container['cuiNumber'];
    }

    /**
    * Sets cuiNumber
    *
    * @param string|null $cuiNumber 身份证号。
    *
    * @return $this
    */
    public function setCuiNumber($cuiNumber)
    {
        $this->container['cuiNumber'] = $cuiNumber;
        return $this;
    }

    /**
    * Gets firstSurname
    *  第一姓氏。
    *
    * @return string|null
    */
    public function getFirstSurname()
    {
        return $this->container['firstSurname'];
    }

    /**
    * Sets firstSurname
    *
    * @param string|null $firstSurname 第一姓氏。
    *
    * @return $this
    */
    public function setFirstSurname($firstSurname)
    {
        $this->container['firstSurname'] = $firstSurname;
        return $this;
    }

    /**
    * Gets secondSurname
    *  第二姓氏。
    *
    * @return string|null
    */
    public function getSecondSurname()
    {
        return $this->container['secondSurname'];
    }

    /**
    * Sets secondSurname
    *
    * @param string|null $secondSurname 第二姓氏。
    *
    * @return $this
    */
    public function setSecondSurname($secondSurname)
    {
        $this->container['secondSurname'] = $secondSurname;
        return $this;
    }

    /**
    * Gets givenName
    *  名。
    *
    * @return string|null
    */
    public function getGivenName()
    {
        return $this->container['givenName'];
    }

    /**
    * Sets givenName
    *
    * @param string|null $givenName 名。
    *
    * @return $this
    */
    public function setGivenName($givenName)
    {
        $this->container['givenName'] = $givenName;
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
    * Gets nationality
    *  国籍。
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
    * @param string|null $nationality 国籍。
    *
    * @return $this
    */
    public function setNationality($nationality)
    {
        $this->container['nationality'] = $nationality;
        return $this;
    }

    /**
    * Gets issueDate
    *  发行日期。
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
    * @param string|null $issueDate 发行日期。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets expiryDate
    *  失效日期。
    *
    * @return string|null
    */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
    * Sets expiryDate
    *
    * @param string|null $expiryDate 失效日期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets birthPlace
    *  出生地编码。
    *
    * @return string|null
    */
    public function getBirthPlace()
    {
        return $this->container['birthPlace'];
    }

    /**
    * Sets birthPlace
    *
    * @param string|null $birthPlace 出生地编码。
    *
    * @return $this
    */
    public function setBirthPlace($birthPlace)
    {
        $this->container['birthPlace'] = $birthPlace;
        return $this;
    }

    /**
    * Gets votingGroup
    *  投票组。
    *
    * @return string|null
    */
    public function getVotingGroup()
    {
        return $this->container['votingGroup'];
    }

    /**
    * Sets votingGroup
    *
    * @param string|null $votingGroup 投票组。
    *
    * @return $this
    */
    public function setVotingGroup($votingGroup)
    {
        $this->container['votingGroup'] = $votingGroup;
        return $this;
    }

    /**
    * Gets organDonation
    *  器官捐赠意愿。
    *
    * @return string|null
    */
    public function getOrganDonation()
    {
        return $this->container['organDonation'];
    }

    /**
    * Sets organDonation
    *
    * @param string|null $organDonation 器官捐赠意愿。
    *
    * @return $this
    */
    public function setOrganDonation($organDonation)
    {
        $this->container['organDonation'] = $organDonation;
        return $this;
    }

    /**
    * Gets registrationDate
    *  注册日期。
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
    * @param string|null $registrationDate 注册日期。
    *
    * @return $this
    */
    public function setRegistrationDate($registrationDate)
    {
        $this->container['registrationDate'] = $registrationDate;
        return $this;
    }

    /**
    * Gets portraitImage
    *  头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    *
    * @return string|null
    */
    public function getPortraitImage()
    {
        return $this->container['portraitImage'];
    }

    /**
    * Sets portraitImage
    *
    * @param string|null $portraitImage 头像的base64编码。当输入参数“return_portrait_image”为“true”时，才返回该参数。
    *
    * @return $this
    */
    public function setPortraitImage($portraitImage)
    {
        $this->container['portraitImage'] = $portraitImage;
        return $this;
    }

    /**
    * Gets portraitLocation
    *  头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return int[][]|null
    */
    public function getPortraitLocation()
    {
        return $this->container['portraitLocation'];
    }

    /**
    * Sets portraitLocation
    *
    * @param int[][]|null $portraitLocation 头像在原图上的位置。 当输入参数“return_portrait_location”为“true”时，才返回该参数。以列表形式显示，包含头像区域四个顶点的二维坐标（x,y），坐标原点为图片左上角，x轴沿水平方向，y轴沿竖直方向。
    *
    * @return $this
    */
    public function setPortraitLocation($portraitLocation)
    {
        $this->container['portraitLocation'] = $portraitLocation;
        return $this;
    }

    /**
    * Gets address
    *  地址。
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
    * @param string|null $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets department
    *  大区。
    *
    * @return string|null
    */
    public function getDepartment()
    {
        return $this->container['department'];
    }

    /**
    * Sets department
    *
    * @param string|null $department 大区。
    *
    * @return $this
    */
    public function setDepartment($department)
    {
        $this->container['department'] = $department;
        return $this;
    }

    /**
    * Gets province
    *  省。
    *
    * @return string|null
    */
    public function getProvince()
    {
        return $this->container['province'];
    }

    /**
    * Sets province
    *
    * @param string|null $province 省。
    *
    * @return $this
    */
    public function setProvince($province)
    {
        $this->container['province'] = $province;
        return $this;
    }

    /**
    * Gets district
    *  区。
    *
    * @return string|null
    */
    public function getDistrict()
    {
        return $this->container['district'];
    }

    /**
    * Sets district
    *
    * @param string|null $district 区。
    *
    * @return $this
    */
    public function setDistrict($district)
    {
        $this->container['district'] = $district;
        return $this;
    }

    /**
    * Gets remarks
    *  备注。
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注。
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets machineCode1
    *  机器码第一行。
    *
    * @return string|null
    */
    public function getMachineCode1()
    {
        return $this->container['machineCode1'];
    }

    /**
    * Sets machineCode1
    *
    * @param string|null $machineCode1 机器码第一行。
    *
    * @return $this
    */
    public function setMachineCode1($machineCode1)
    {
        $this->container['machineCode1'] = $machineCode1;
        return $this;
    }

    /**
    * Gets machineCode2
    *  机器码第二行。
    *
    * @return string|null
    */
    public function getMachineCode2()
    {
        return $this->container['machineCode2'];
    }

    /**
    * Sets machineCode2
    *
    * @param string|null $machineCode2 机器码第二行。
    *
    * @return $this
    */
    public function setMachineCode2($machineCode2)
    {
        $this->container['machineCode2'] = $machineCode2;
        return $this;
    }

    /**
    * Gets machineCode3
    *  机器码第三行。
    *
    * @return string|null
    */
    public function getMachineCode3()
    {
        return $this->container['machineCode3'];
    }

    /**
    * Sets machineCode3
    *
    * @param string|null $machineCode3 机器码第三行。
    *
    * @return $this
    */
    public function setMachineCode3($machineCode3)
    {
        $this->container['machineCode3'] = $machineCode3;
        return $this;
    }

    /**
    * Gets duplicate
    *  是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    *
    * @return bool|null
    */
    public function getDuplicate()
    {
        return $this->container['duplicate'];
    }

    /**
    * Sets duplicate
    *
    * @param bool|null $duplicate 是否重新登记过。可选值如下所示： -  true: 已重新登记过 -  false: 未重新登记过
    *
    * @return $this
    */
    public function setDuplicate($duplicate)
    {
        $this->container['duplicate'] = $duplicate;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @return map[string,float]|null
    */
    public function getConfidence()
    {
        return $this->container['confidence'];
    }

    /**
    * Sets confidence
    *
    * @param map[string,float]|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。注：置信度由算法给出，不直接等价于对应字段的准确率。
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

