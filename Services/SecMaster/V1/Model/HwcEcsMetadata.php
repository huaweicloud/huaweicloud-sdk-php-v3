<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HwcEcsMetadata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HwcEcsMetadata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageId  云服务器操作系统对应的镜像ID。
    * imageType  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    * imageName  云服务器操作系统对应的镜像名称。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    * osType  操作系统类型，取值为：Linux、Windows。
    * vpcId  云服务器所属的虚拟私有云ID。
    * resourceSpecCode  云服务器对应的资源规格。
    * resourceType  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    * agencyName  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageId' => 'string',
            'imageType' => 'string',
            'imageName' => 'string',
            'osBit' => 'string',
            'osType' => 'string',
            'vpcId' => 'string',
            'resourceSpecCode' => 'string',
            'resourceType' => 'string',
            'agencyName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageId  云服务器操作系统对应的镜像ID。
    * imageType  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    * imageName  云服务器操作系统对应的镜像名称。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    * osType  操作系统类型，取值为：Linux、Windows。
    * vpcId  云服务器所属的虚拟私有云ID。
    * resourceSpecCode  云服务器对应的资源规格。
    * resourceType  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    * agencyName  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageId' => null,
        'imageType' => null,
        'imageName' => null,
        'osBit' => null,
        'osType' => null,
        'vpcId' => null,
        'resourceSpecCode' => null,
        'resourceType' => null,
        'agencyName' => null
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
    * imageId  云服务器操作系统对应的镜像ID。
    * imageType  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    * imageName  云服务器操作系统对应的镜像名称。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    * osType  操作系统类型，取值为：Linux、Windows。
    * vpcId  云服务器所属的虚拟私有云ID。
    * resourceSpecCode  云服务器对应的资源规格。
    * resourceType  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    * agencyName  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageId' => 'image_id',
            'imageType' => 'image_type',
            'imageName' => 'image_name',
            'osBit' => 'os_bit',
            'osType' => 'os_type',
            'vpcId' => 'vpc_id',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceType' => 'resource_type',
            'agencyName' => 'agency_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageId  云服务器操作系统对应的镜像ID。
    * imageType  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    * imageName  云服务器操作系统对应的镜像名称。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    * osType  操作系统类型，取值为：Linux、Windows。
    * vpcId  云服务器所属的虚拟私有云ID。
    * resourceSpecCode  云服务器对应的资源规格。
    * resourceType  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    * agencyName  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @var string[]
    */
    protected static $setters = [
            'imageId' => 'setImageId',
            'imageType' => 'setImageType',
            'imageName' => 'setImageName',
            'osBit' => 'setOsBit',
            'osType' => 'setOsType',
            'vpcId' => 'setVpcId',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceType' => 'setResourceType',
            'agencyName' => 'setAgencyName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageId  云服务器操作系统对应的镜像ID。
    * imageType  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    * imageName  云服务器操作系统对应的镜像名称。
    * osBit  操作系统位数，一般取值为“32”或者“64”。
    * osType  操作系统类型，取值为：Linux、Windows。
    * vpcId  云服务器所属的虚拟私有云ID。
    * resourceSpecCode  云服务器对应的资源规格。
    * resourceType  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    * agencyName  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @var string[]
    */
    protected static $getters = [
            'imageId' => 'getImageId',
            'imageType' => 'getImageType',
            'imageName' => 'getImageName',
            'osBit' => 'getOsBit',
            'osType' => 'getOsType',
            'vpcId' => 'getVpcId',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceType' => 'getResourceType',
            'agencyName' => 'getAgencyName'
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
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['imageType'] = isset($data['imageType']) ? $data['imageType'] : null;
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['osBit'] = isset($data['osBit']) ? $data['osBit'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 36)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 32)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) > 32)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['imageType']) && (mb_strlen($this->container['imageType']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) > 2)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be smaller than or equal to 2.";
            }
            if (!is_null($this->container['osBit']) && (mb_strlen($this->container['osBit']) < 2)) {
                $invalidProperties[] = "invalid value for 'osBit', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 32)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 32.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) > 128)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['agencyName']) && (mb_strlen($this->container['agencyName']) < 0)) {
                $invalidProperties[] = "invalid value for 'agencyName', the character length must be bigger than or equal to 0.";
            }
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
    * Gets imageId
    *  云服务器操作系统对应的镜像ID。
    *
    * @return string|null
    */
    public function getImageId()
    {
        return $this->container['imageId'];
    }

    /**
    * Sets imageId
    *
    * @param string|null $imageId 云服务器操作系统对应的镜像ID。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets imageType
    *  镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    *
    * @return string|null
    */
    public function getImageType()
    {
        return $this->container['imageType'];
    }

    /**
    * Sets imageType
    *
    * @param string|null $imageType 镜像类型，目前支持： 公共镜像（gold） 私有镜像（private） 共享镜像（shared）
    *
    * @return $this
    */
    public function setImageType($imageType)
    {
        $this->container['imageType'] = $imageType;
        return $this;
    }

    /**
    * Gets imageName
    *  云服务器操作系统对应的镜像名称。
    *
    * @return string|null
    */
    public function getImageName()
    {
        return $this->container['imageName'];
    }

    /**
    * Sets imageName
    *
    * @param string|null $imageName 云服务器操作系统对应的镜像名称。
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets osBit
    *  操作系统位数，一般取值为“32”或者“64”。
    *
    * @return string|null
    */
    public function getOsBit()
    {
        return $this->container['osBit'];
    }

    /**
    * Sets osBit
    *
    * @param string|null $osBit 操作系统位数，一般取值为“32”或者“64”。
    *
    * @return $this
    */
    public function setOsBit($osBit)
    {
        $this->container['osBit'] = $osBit;
        return $this;
    }

    /**
    * Gets osType
    *  操作系统类型，取值为：Linux、Windows。
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType 操作系统类型，取值为：Linux、Windows。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets vpcId
    *  云服务器所属的虚拟私有云ID。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 云服务器所属的虚拟私有云ID。
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  云服务器对应的资源规格。
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 云服务器对应的资源规格。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceType
    *  云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 云服务器对应的资源类型。 取值为“1”，代表资源类型为云服务器。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托的名称。 委托是由租户管理员在统一身份认证服务（Identity and Access Management，IAM）上创建的，可以为弹性云服务器提供访问云服务器的临时凭证。
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
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

