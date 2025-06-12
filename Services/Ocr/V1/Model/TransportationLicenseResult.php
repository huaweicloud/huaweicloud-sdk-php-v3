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
    * maximumCapacity  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关。
    * issueDate  发证日期。
    * ownerAddress  业户地址。
    * economicType  经济类型。
    * businessCertificate  经营许可证号。
    * businessScope  经营范围。
    * expiryDate  有效期。
    * reviewExpiryDate  审验有效期。
    * assessedTechnicalLevel  技术等级评定。
    * imageLocation  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    * adjustedImage  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ownerName' => 'string',
            'licenseNumber' => 'string',
            'vehicleNumber' => 'string',
            'vehicleType' => 'string',
            'maximumCapacity' => 'string',
            'vehicleSize' => 'string',
            'issuingAuthority' => 'string',
            'issueDate' => 'string',
            'ownerAddress' => 'string',
            'economicType' => 'string',
            'businessCertificate' => 'string',
            'businessScope' => 'string',
            'expiryDate' => 'string',
            'reviewExpiryDate' => 'string',
            'assessedTechnicalLevel' => 'string',
            'imageLocation' => 'int[][]',
            'adjustedImage' => 'string',
            'confidence' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * maximumCapacity  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关。
    * issueDate  发证日期。
    * ownerAddress  业户地址。
    * economicType  经济类型。
    * businessCertificate  经营许可证号。
    * businessScope  经营范围。
    * expiryDate  有效期。
    * reviewExpiryDate  审验有效期。
    * assessedTechnicalLevel  技术等级评定。
    * imageLocation  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    * adjustedImage  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ownerName' => null,
        'licenseNumber' => null,
        'vehicleNumber' => null,
        'vehicleType' => null,
        'maximumCapacity' => null,
        'vehicleSize' => null,
        'issuingAuthority' => null,
        'issueDate' => null,
        'ownerAddress' => null,
        'economicType' => null,
        'businessCertificate' => null,
        'businessScope' => null,
        'expiryDate' => null,
        'reviewExpiryDate' => null,
        'assessedTechnicalLevel' => null,
        'imageLocation' => 'int32',
        'adjustedImage' => null,
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
    * maximumCapacity  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关。
    * issueDate  发证日期。
    * ownerAddress  业户地址。
    * economicType  经济类型。
    * businessCertificate  经营许可证号。
    * businessScope  经营范围。
    * expiryDate  有效期。
    * reviewExpiryDate  审验有效期。
    * assessedTechnicalLevel  技术等级评定。
    * imageLocation  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    * adjustedImage  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ownerName' => 'owner_name',
            'licenseNumber' => 'license_number',
            'vehicleNumber' => 'vehicle_number',
            'vehicleType' => 'vehicle_type',
            'maximumCapacity' => 'maximum_capacity',
            'vehicleSize' => 'vehicle_size',
            'issuingAuthority' => 'issuing_authority',
            'issueDate' => 'issue_date',
            'ownerAddress' => 'owner_address',
            'economicType' => 'economic_type',
            'businessCertificate' => 'business_certificate',
            'businessScope' => 'business_scope',
            'expiryDate' => 'expiry_date',
            'reviewExpiryDate' => 'review_expiry_date',
            'assessedTechnicalLevel' => 'assessed_technical_level',
            'imageLocation' => 'image_location',
            'adjustedImage' => 'adjusted_image',
            'confidence' => 'confidence'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * maximumCapacity  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关。
    * issueDate  发证日期。
    * ownerAddress  业户地址。
    * economicType  经济类型。
    * businessCertificate  经营许可证号。
    * businessScope  经营范围。
    * expiryDate  有效期。
    * reviewExpiryDate  审验有效期。
    * assessedTechnicalLevel  技术等级评定。
    * imageLocation  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    * adjustedImage  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $setters = [
            'ownerName' => 'setOwnerName',
            'licenseNumber' => 'setLicenseNumber',
            'vehicleNumber' => 'setVehicleNumber',
            'vehicleType' => 'setVehicleType',
            'maximumCapacity' => 'setMaximumCapacity',
            'vehicleSize' => 'setVehicleSize',
            'issuingAuthority' => 'setIssuingAuthority',
            'issueDate' => 'setIssueDate',
            'ownerAddress' => 'setOwnerAddress',
            'economicType' => 'setEconomicType',
            'businessCertificate' => 'setBusinessCertificate',
            'businessScope' => 'setBusinessScope',
            'expiryDate' => 'setExpiryDate',
            'reviewExpiryDate' => 'setReviewExpiryDate',
            'assessedTechnicalLevel' => 'setAssessedTechnicalLevel',
            'imageLocation' => 'setImageLocation',
            'adjustedImage' => 'setAdjustedImage',
            'confidence' => 'setConfidence'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ownerName  业户名称。
    * licenseNumber  道路运输证号。
    * vehicleNumber  车辆号牌。
    * vehicleType  车辆类型。
    * maximumCapacity  吨(座)位。
    * vehicleSize  车辆尺寸。
    * issuingAuthority  核发机关。
    * issueDate  发证日期。
    * ownerAddress  业户地址。
    * economicType  经济类型。
    * businessCertificate  经营许可证号。
    * businessScope  经营范围。
    * expiryDate  有效期。
    * reviewExpiryDate  审验有效期。
    * assessedTechnicalLevel  技术等级评定。
    * imageLocation  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    * adjustedImage  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    * confidence  相关字段的置信度信息，置信度越大，表示本次识别的对应字段的可靠性越高，在统计意义上，置信度越大，准确率越高。 置信度由算法给出，不直接等价于对应字段的准确率。
    *
    * @var string[]
    */
    protected static $getters = [
            'ownerName' => 'getOwnerName',
            'licenseNumber' => 'getLicenseNumber',
            'vehicleNumber' => 'getVehicleNumber',
            'vehicleType' => 'getVehicleType',
            'maximumCapacity' => 'getMaximumCapacity',
            'vehicleSize' => 'getVehicleSize',
            'issuingAuthority' => 'getIssuingAuthority',
            'issueDate' => 'getIssueDate',
            'ownerAddress' => 'getOwnerAddress',
            'economicType' => 'getEconomicType',
            'businessCertificate' => 'getBusinessCertificate',
            'businessScope' => 'getBusinessScope',
            'expiryDate' => 'getExpiryDate',
            'reviewExpiryDate' => 'getReviewExpiryDate',
            'assessedTechnicalLevel' => 'getAssessedTechnicalLevel',
            'imageLocation' => 'getImageLocation',
            'adjustedImage' => 'getAdjustedImage',
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
        $this->container['maximumCapacity'] = isset($data['maximumCapacity']) ? $data['maximumCapacity'] : null;
        $this->container['vehicleSize'] = isset($data['vehicleSize']) ? $data['vehicleSize'] : null;
        $this->container['issuingAuthority'] = isset($data['issuingAuthority']) ? $data['issuingAuthority'] : null;
        $this->container['issueDate'] = isset($data['issueDate']) ? $data['issueDate'] : null;
        $this->container['ownerAddress'] = isset($data['ownerAddress']) ? $data['ownerAddress'] : null;
        $this->container['economicType'] = isset($data['economicType']) ? $data['economicType'] : null;
        $this->container['businessCertificate'] = isset($data['businessCertificate']) ? $data['businessCertificate'] : null;
        $this->container['businessScope'] = isset($data['businessScope']) ? $data['businessScope'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['reviewExpiryDate'] = isset($data['reviewExpiryDate']) ? $data['reviewExpiryDate'] : null;
        $this->container['assessedTechnicalLevel'] = isset($data['assessedTechnicalLevel']) ? $data['assessedTechnicalLevel'] : null;
        $this->container['imageLocation'] = isset($data['imageLocation']) ? $data['imageLocation'] : null;
        $this->container['adjustedImage'] = isset($data['adjustedImage']) ? $data['adjustedImage'] : null;
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
    * Gets maximumCapacity
    *  吨(座)位。
    *
    * @return string|null
    */
    public function getMaximumCapacity()
    {
        return $this->container['maximumCapacity'];
    }

    /**
    * Sets maximumCapacity
    *
    * @param string|null $maximumCapacity 吨(座)位。
    *
    * @return $this
    */
    public function setMaximumCapacity($maximumCapacity)
    {
        $this->container['maximumCapacity'] = $maximumCapacity;
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
    *  核发机关。
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
    * @param string|null $issuingAuthority 核发机关。
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
    * Gets ownerAddress
    *  业户地址。
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
    * @param string|null $ownerAddress 业户地址。
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
    *  经济类型。
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
    * @param string|null $economicType 经济类型。
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
    *  经营许可证号。
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
    * @param string|null $businessCertificate 经营许可证号。
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
    *  经营范围。
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
    * @param string|null $businessScope 经营范围。
    *
    * @return $this
    */
    public function setBusinessScope($businessScope)
    {
        $this->container['businessScope'] = $businessScope;
        return $this;
    }

    /**
    * Gets expiryDate
    *  有效期。
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
    * @param string|null $expiryDate 有效期。
    *
    * @return $this
    */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;
        return $this;
    }

    /**
    * Gets reviewExpiryDate
    *  审验有效期。
    *
    * @return string|null
    */
    public function getReviewExpiryDate()
    {
        return $this->container['reviewExpiryDate'];
    }

    /**
    * Sets reviewExpiryDate
    *
    * @param string|null $reviewExpiryDate 审验有效期。
    *
    * @return $this
    */
    public function setReviewExpiryDate($reviewExpiryDate)
    {
        $this->container['reviewExpiryDate'] = $reviewExpiryDate;
        return $this;
    }

    /**
    * Gets assessedTechnicalLevel
    *  技术等级评定。
    *
    * @return string|null
    */
    public function getAssessedTechnicalLevel()
    {
        return $this->container['assessedTechnicalLevel'];
    }

    /**
    * Sets assessedTechnicalLevel
    *
    * @param string|null $assessedTechnicalLevel 技术等级评定。
    *
    * @return $this
    */
    public function setAssessedTechnicalLevel($assessedTechnicalLevel)
    {
        $this->container['assessedTechnicalLevel'] = $assessedTechnicalLevel;
        return $this;
    }

    /**
    * Gets imageLocation
    *  道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    *
    * @return int[][]|null
    */
    public function getImageLocation()
    {
        return $this->container['imageLocation'];
    }

    /**
    * Sets imageLocation
    *
    * @param int[][]|null $imageLocation 道路运输证在原图中的坐标位置，输出左上、右上、右下、左下四个点坐标。仅在return_image_location设置为true时返回该字段。
    *
    * @return $this
    */
    public function setImageLocation($imageLocation)
    {
        $this->container['imageLocation'] = $imageLocation;
        return $this;
    }

    /**
    * Gets adjustedImage
    *  道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    *
    * @return string|null
    */
    public function getAdjustedImage()
    {
        return $this->container['adjustedImage'];
    }

    /**
    * Sets adjustedImage
    *
    * @param string|null $adjustedImage 道路运输证图片的base64编码结果。仅在return_adjusted_image设置为true时返回该字段。
    *
    * @return $this
    */
    public function setAdjustedImage($adjustedImage)
    {
        $this->container['adjustedImage'] = $adjustedImage;
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

