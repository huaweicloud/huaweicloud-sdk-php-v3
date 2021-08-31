<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TransportationLicenseResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TransportationLicenseResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * vehicleWeight  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关（非必有，依赖对应运输证板式）。
    * issueDate  签发日期（非必有，依赖对应运输证板式）。
    * ownerAddress  业户地址（非必有，依赖对应运输证板式）。
    * economicType  经济类型（非必有，依赖对应运输证板式）。
    * businessCertificate  经营许可证号（非必有，依赖对应运输证板式）。
    * businessScope  道路普通货物运输（非必有，依赖对应运输证板式）。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ownerName' => 'string',
            'licenseNumber' => 'string',
            'vehicleNumber' => 'string',
            'vehicleType' => 'string',
            'vehicleWeight' => 'string',
            'vehicleSize' => 'string',
            'issuingAuthority' => 'string',
            'issueDate' => 'string',
            'ownerAddress' => 'string',
            'economicType' => 'string',
            'businessCertificate' => 'string',
            'businessScope' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * vehicleWeight  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关（非必有，依赖对应运输证板式）。
    * issueDate  签发日期（非必有，依赖对应运输证板式）。
    * ownerAddress  业户地址（非必有，依赖对应运输证板式）。
    * economicType  经济类型（非必有，依赖对应运输证板式）。
    * businessCertificate  经营许可证号（非必有，依赖对应运输证板式）。
    * businessScope  道路普通货物运输（非必有，依赖对应运输证板式）。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ownerName' => null,
        'licenseNumber' => null,
        'vehicleNumber' => null,
        'vehicleType' => null,
        'vehicleWeight' => null,
        'vehicleSize' => null,
        'issuingAuthority' => null,
        'issueDate' => null,
        'ownerAddress' => null,
        'economicType' => null,
        'businessCertificate' => null,
        'businessScope' => null,
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
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * vehicleWeight  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关（非必有，依赖对应运输证板式）。
    * issueDate  签发日期（非必有，依赖对应运输证板式）。
    * ownerAddress  业户地址（非必有，依赖对应运输证板式）。
    * economicType  经济类型（非必有，依赖对应运输证板式）。
    * businessCertificate  经营许可证号（非必有，依赖对应运输证板式）。
    * businessScope  道路普通货物运输（非必有，依赖对应运输证板式）。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ownerName' => 'owner_name',
            'licenseNumber' => 'license_number',
            'vehicleNumber' => 'vehicle_number',
            'vehicleType' => 'vehicle_type',
            'vehicleWeight' => 'vehicle_weight',
            'vehicleSize' => 'vehicle_size',
            'issuingAuthority' => 'issuing_authority',
            'issueDate' => 'issue_date',
            'ownerAddress' => 'owner_address',
            'economicType' => 'economic_type',
            'businessCertificate' => 'business_certificate',
            'businessScope' => 'business_scope',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * vehicleWeight  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关（非必有，依赖对应运输证板式）。
    * issueDate  签发日期（非必有，依赖对应运输证板式）。
    * ownerAddress  业户地址（非必有，依赖对应运输证板式）。
    * economicType  经济类型（非必有，依赖对应运输证板式）。
    * businessCertificate  经营许可证号（非必有，依赖对应运输证板式）。
    * businessScope  道路普通货物运输（非必有，依赖对应运输证板式）。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'ownerName' => 'setOwnerName',
            'licenseNumber' => 'setLicenseNumber',
            'vehicleNumber' => 'setVehicleNumber',
            'vehicleType' => 'setVehicleType',
            'vehicleWeight' => 'setVehicleWeight',
            'vehicleSize' => 'setVehicleSize',
            'issuingAuthority' => 'setIssuingAuthority',
            'issueDate' => 'setIssueDate',
            'ownerAddress' => 'setOwnerAddress',
            'economicType' => 'setEconomicType',
            'businessCertificate' => 'setBusinessCertificate',
            'businessScope' => 'setBusinessScope',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * vehicleWeight  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关（非必有，依赖对应运输证板式）。
    * issueDate  签发日期（非必有，依赖对应运输证板式）。
    * ownerAddress  业户地址（非必有，依赖对应运输证板式）。
    * economicType  经济类型（非必有，依赖对应运输证板式）。
    * businessCertificate  经营许可证号（非必有，依赖对应运输证板式）。
    * businessScope  道路普通货物运输（非必有，依赖对应运输证板式）。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'ownerName' => 'getOwnerName',
            'licenseNumber' => 'getLicenseNumber',
            'vehicleNumber' => 'getVehicleNumber',
            'vehicleType' => 'getVehicleType',
            'vehicleWeight' => 'getVehicleWeight',
            'vehicleSize' => 'getVehicleSize',
            'issuingAuthority' => 'getIssuingAuthority',
            'issueDate' => 'getIssueDate',
            'ownerAddress' => 'getOwnerAddress',
            'economicType' => 'getEconomicType',
            'businessCertificate' => 'getBusinessCertificate',
            'businessScope' => 'getBusinessScope',
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
        $this->container['ownerName'] = isset($data['ownerName']) ? $data['ownerName'] : null;
        $this->container['licenseNumber'] = isset($data['licenseNumber']) ? $data['licenseNumber'] : null;
        $this->container['vehicleNumber'] = isset($data['vehicleNumber']) ? $data['vehicleNumber'] : null;
        $this->container['vehicleType'] = isset($data['vehicleType']) ? $data['vehicleType'] : null;
        $this->container['vehicleWeight'] = isset($data['vehicleWeight']) ? $data['vehicleWeight'] : null;
        $this->container['vehicleSize'] = isset($data['vehicleSize']) ? $data['vehicleSize'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['ownerAddress'] = isset($data['ownerAddress']) ? $data['ownerAddress'] : null;
        $this->container['economicType'] = isset($data['economicType']) ? $data['economicType'] : null;
        $this->container['businessCertificate'] = isset($data['businessCertificate']) ? $data['businessCertificate'] : null;
        $this->container['businessScope'] = isset($data['businessScope']) ? $data['businessScope'] : null;
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
    * Gets ownerName
    *  业户名称。
    *
    * @return string|null
    */
    public function getOwnerName()
    {
        return $this->container['ownerName'];
    }

    /**
    * Sets ownerName
    *
    * @param string|null $ownerName 业户名称。
    *
    * @return $this
    */
    public function setOwnerName($ownerName)
    {
        $this->container['ownerName'] = $ownerName;
        return $this;
    }

    /**
    * Gets licenseNumber
    *  道路运输证号。
    *
    * @return string|null
    */
    public function getLicenseNumber()
    {
        return $this->container['licenseNumber'];
    }

    /**
    * Sets licenseNumber
    *
    * @param string|null $licenseNumber 道路运输证号。
    *
    * @return $this
    */
    public function setLicenseNumber($licenseNumber)
    {
        $this->container['licenseNumber'] = $licenseNumber;
        return $this;
    }

    /**
    * Gets vehicleNumber
    *  车辆号牌。
    *
    * @return string|null
    */
    public function getVehicleNumber()
    {
        return $this->container['vehicleNumber'];
    }

    /**
    * Sets vehicleNumber
    *
    * @param string|null $vehicleNumber 车辆号牌。
    *
    * @return $this
    */
    public function setVehicleNumber($vehicleNumber)
    {
        $this->container['vehicleNumber'] = $vehicleNumber;
        return $this;
    }

    /**
    * Gets vehicleType
    *  车辆类型。
    *
    * @return string|null
    */
    public function getVehicleType()
    {
        return $this->container['vehicleType'];
    }

    /**
    * Sets vehicleType
    *
    * @param string|null $vehicleType 车辆类型。
    *
    * @return $this
    */
    public function setVehicleType($vehicleType)
    {
        $this->container['vehicleType'] = $vehicleType;
        return $this;
    }

    /**
    * Gets vehicleWeight
    *  吨(座)位。
    *
    * @return string|null
    */
    public function getVehicleWeight()
    {
        return $this->container['vehicleWeight'];
    }

    /**
    * Sets vehicleWeight
    *
    * @param string|null $vehicleWeight 吨(座)位。
    *
    * @return $this
    */
    public function setVehicleWeight($vehicleWeight)
    {
        $this->container['vehicleWeight'] = $vehicleWeight;
        return $this;
    }

    /**
    * Gets vehicleSize
    *  车辆尺寸。
    *
    * @return string|null
    */
    public function getVehicleSize()
    {
        return $this->container['vehicleSize'];
    }

    /**
    * Sets vehicleSize
    *
    * @param string|null $vehicleSize 车辆尺寸。
    *
    * @return $this
    */
    public function setVehicleSize($vehicleSize)
    {
        $this->container['vehicleSize'] = $vehicleSize;
        return $this;
    }

    /**
    * Gets issuingAuthority
    *  核发机关（非必有，依赖对应运输证板式）。
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
    * @param string|null $issuingAuthority 核发机关（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setIssuingAuthority($issuingAuthority)
    {
        $this->container['issuingAuthority'] = $issuingAuthority;
        return $this;
    }

    /**
    * Gets issueDate
    *  签发日期（非必有，依赖对应运输证板式）。
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
    * @param string|null $issueDate 签发日期（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setIssueDate($issueDate)
    {
        $this->container['issueDate'] = $issueDate;
        return $this;
    }

    /**
    * Gets ownerAddress
    *  业户地址（非必有，依赖对应运输证板式）。
    *
    * @return string|null
    */
    public function getOwnerAddress()
    {
        return $this->container['ownerAddress'];
    }

    /**
    * Sets ownerAddress
    *
    * @param string|null $ownerAddress 业户地址（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setOwnerAddress($ownerAddress)
    {
        $this->container['ownerAddress'] = $ownerAddress;
        return $this;
    }

    /**
    * Gets economicType
    *  经济类型（非必有，依赖对应运输证板式）。
    *
    * @return string|null
    */
    public function getEconomicType()
    {
        return $this->container['economicType'];
    }

    /**
    * Sets economicType
    *
    * @param string|null $economicType 经济类型（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setEconomicType($economicType)
    {
        $this->container['economicType'] = $economicType;
        return $this;
    }

    /**
    * Gets businessCertificate
    *  经营许可证号（非必有，依赖对应运输证板式）。
    *
    * @return string|null
    */
    public function getBusinessCertificate()
    {
        return $this->container['businessCertificate'];
    }

    /**
    * Sets businessCertificate
    *
    * @param string|null $businessCertificate 经营许可证号（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setBusinessCertificate($businessCertificate)
    {
        $this->container['businessCertificate'] = $businessCertificate;
        return $this;
    }

    /**
    * Gets businessScope
    *  道路普通货物运输（非必有，依赖对应运输证板式）。
    *
    * @return string|null
    */
    public function getBusinessScope()
    {
        return $this->container['businessScope'];
    }

    /**
    * Sets businessScope
    *
    * @param string|null $businessScope 道路普通货物运输（非必有，依赖对应运输证板式）。
    *
    * @return $this
    */
    public function setBusinessScope($businessScope)
    {
        $this->container['businessScope'] = $businessScope;
        return $this;
    }

    /**
    * Gets confidence
    *  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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
    * @param object|null $confidence 相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
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

