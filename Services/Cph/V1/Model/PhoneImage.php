<?php

namespace HuaweiCloud\SDK\Cph\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PhoneImage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PhoneImage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * imageName  手机镜像名称，不超过128个字节。
    * osType  镜像操作系统类型，不超过16个字节。
    * isPublic  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    * osName  手机操作系统，不超过36个字节。
    * imageLabel  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    * imageId  手机镜像唯一标识ID，不超过32个字节。
    * isSupportEncrypt  当前镜像是否支持文件级加密
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'imageName' => 'string',
            'osType' => 'string',
            'isPublic' => 'int',
            'osName' => 'string',
            'imageLabel' => 'string',
            'imageId' => 'string',
            'isSupportEncrypt' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * imageName  手机镜像名称，不超过128个字节。
    * osType  镜像操作系统类型，不超过16个字节。
    * isPublic  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    * osName  手机操作系统，不超过36个字节。
    * imageLabel  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    * imageId  手机镜像唯一标识ID，不超过32个字节。
    * isSupportEncrypt  当前镜像是否支持文件级加密
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'imageName' => null,
        'osType' => null,
        'isPublic' => 'int32',
        'osName' => null,
        'imageLabel' => null,
        'imageId' => null,
        'isSupportEncrypt' => null
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
    * imageName  手机镜像名称，不超过128个字节。
    * osType  镜像操作系统类型，不超过16个字节。
    * isPublic  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    * osName  手机操作系统，不超过36个字节。
    * imageLabel  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    * imageId  手机镜像唯一标识ID，不超过32个字节。
    * isSupportEncrypt  当前镜像是否支持文件级加密
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'imageName' => 'image_name',
            'osType' => 'os_type',
            'isPublic' => 'is_public',
            'osName' => 'os_name',
            'imageLabel' => 'image_label',
            'imageId' => 'image_id',
            'isSupportEncrypt' => 'is_support_encrypt'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * imageName  手机镜像名称，不超过128个字节。
    * osType  镜像操作系统类型，不超过16个字节。
    * isPublic  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    * osName  手机操作系统，不超过36个字节。
    * imageLabel  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    * imageId  手机镜像唯一标识ID，不超过32个字节。
    * isSupportEncrypt  当前镜像是否支持文件级加密
    *
    * @var string[]
    */
    protected static $setters = [
            'imageName' => 'setImageName',
            'osType' => 'setOsType',
            'isPublic' => 'setIsPublic',
            'osName' => 'setOsName',
            'imageLabel' => 'setImageLabel',
            'imageId' => 'setImageId',
            'isSupportEncrypt' => 'setIsSupportEncrypt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * imageName  手机镜像名称，不超过128个字节。
    * osType  镜像操作系统类型，不超过16个字节。
    * isPublic  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    * osName  手机操作系统，不超过36个字节。
    * imageLabel  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    * imageId  手机镜像唯一标识ID，不超过32个字节。
    * isSupportEncrypt  当前镜像是否支持文件级加密
    *
    * @var string[]
    */
    protected static $getters = [
            'imageName' => 'getImageName',
            'osType' => 'getOsType',
            'isPublic' => 'getIsPublic',
            'osName' => 'getOsName',
            'imageLabel' => 'getImageLabel',
            'imageId' => 'getImageId',
            'isSupportEncrypt' => 'getIsSupportEncrypt'
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
        $this->container['imageName'] = isset($data['imageName']) ? $data['imageName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['isPublic'] = isset($data['isPublic']) ? $data['isPublic'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['imageLabel'] = isset($data['imageLabel']) ? $data['imageLabel'] : null;
        $this->container['imageId'] = isset($data['imageId']) ? $data['imageId'] : null;
        $this->container['isSupportEncrypt'] = isset($data['isSupportEncrypt']) ? $data['isSupportEncrypt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['imageName']) && (mb_strlen($this->container['imageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 16)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['isPublic']) && ($this->container['isPublic'] > 128)) {
                $invalidProperties[] = "invalid value for 'isPublic', must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['isPublic']) && ($this->container['isPublic'] < -128)) {
                $invalidProperties[] = "invalid value for 'isPublic', must be bigger than or equal to -128.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 36)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 0)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageLabel']) && (mb_strlen($this->container['imageLabel']) > 1024)) {
                $invalidProperties[] = "invalid value for 'imageLabel', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['imageLabel']) && (mb_strlen($this->container['imageLabel']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageLabel', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) > 64)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['imageId']) && (mb_strlen($this->container['imageId']) < 0)) {
                $invalidProperties[] = "invalid value for 'imageId', the character length must be bigger than or equal to 0.";
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
    * Gets imageName
    *  手机镜像名称，不超过128个字节。
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
    * @param string|null $imageName 手机镜像名称，不超过128个字节。
    *
    * @return $this
    */
    public function setImageName($imageName)
    {
        $this->container['imageName'] = $imageName;
        return $this;
    }

    /**
    * Gets osType
    *  镜像操作系统类型，不超过16个字节。
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
    * @param string|null $osType 镜像操作系统类型，不超过16个字节。
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets isPublic
    *  镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    *
    * @return int|null
    */
    public function getIsPublic()
    {
        return $this->container['isPublic'];
    }

    /**
    * Sets isPublic
    *
    * @param int|null $isPublic 镜像类型。 - 1：公有镜像 - 2 ：私有镜像
    *
    * @return $this
    */
    public function setIsPublic($isPublic)
    {
        $this->container['isPublic'] = $isPublic;
        return $this;
    }

    /**
    * Gets osName
    *  手机操作系统，不超过36个字节。
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName 手机操作系统，不超过36个字节。
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets imageLabel
    *  镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    *
    * @return string|null
    */
    public function getImageLabel()
    {
        return $this->container['imageLabel'];
    }

    /**
    * Sets imageLabel
    *
    * @param string|null $imageLabel 镜像适用的云手机规格。 - cloud_phone：适用于physical.rx1.xlarge 类型云手机服务器 - cloud_phone_1620：适用于physical.kg1.4xlarge.cp类型云手机服务器 - cloud_game：适用于physical.rx1.xlarge.cg 类型云手游服务器 - cloud_game_1620：适用于physical.kg1.4xlarge.cg 类型云手游服务器 - qemu_phone： 适用于physical.rx1.xlarge 类型云手机服务器中 qemu类型云手机规格
    *
    * @return $this
    */
    public function setImageLabel($imageLabel)
    {
        $this->container['imageLabel'] = $imageLabel;
        return $this;
    }

    /**
    * Gets imageId
    *  手机镜像唯一标识ID，不超过32个字节。
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
    * @param string|null $imageId 手机镜像唯一标识ID，不超过32个字节。
    *
    * @return $this
    */
    public function setImageId($imageId)
    {
        $this->container['imageId'] = $imageId;
        return $this;
    }

    /**
    * Gets isSupportEncrypt
    *  当前镜像是否支持文件级加密
    *
    * @return bool|null
    */
    public function getIsSupportEncrypt()
    {
        return $this->container['isSupportEncrypt'];
    }

    /**
    * Sets isSupportEncrypt
    *
    * @param bool|null $isSupportEncrypt 当前镜像是否支持文件级加密
    *
    * @return $this
    */
    public function setIsSupportEncrypt($isSupportEncrypt)
    {
        $this->container['isSupportEncrypt'] = $isSupportEncrypt;
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

