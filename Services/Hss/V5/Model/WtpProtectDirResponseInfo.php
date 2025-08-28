<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class WtpProtectDirResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'WtpProtectDirResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * protectDirList  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    * exclueFileType  排除文件类型
    * excludeFileType  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'protectDirList' => '\HuaweiCloud\SDK\Hss\V5\Model\WtpProtectHostDirResponseInfo[]',
            'exclueFileType' => 'string',
            'excludeFileType' => 'string',
            'protectMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * protectDirList  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    * exclueFileType  排除文件类型
    * excludeFileType  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'protectDirList' => null,
        'exclueFileType' => null,
        'excludeFileType' => null,
        'protectMode' => null
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
    * protectDirList  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    * exclueFileType  排除文件类型
    * excludeFileType  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'protectDirList' => 'protect_dir_list',
            'exclueFileType' => 'exclue_file_type',
            'excludeFileType' => 'exclude_file_type',
            'protectMode' => 'protect_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * protectDirList  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    * exclueFileType  排除文件类型
    * excludeFileType  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'protectDirList' => 'setProtectDirList',
            'exclueFileType' => 'setExclueFileType',
            'excludeFileType' => 'setExcludeFileType',
            'protectMode' => 'setProtectMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * protectDirList  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    * exclueFileType  排除文件类型
    * excludeFileType  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    * protectMode  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'protectDirList' => 'getProtectDirList',
            'exclueFileType' => 'getExclueFileType',
            'excludeFileType' => 'getExcludeFileType',
            'protectMode' => 'getProtectMode'
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
        $this->container['protectDirList'] = isset($data['protectDirList']) ? $data['protectDirList'] : null;
        $this->container['exclueFileType'] = isset($data['exclueFileType']) ? $data['exclueFileType'] : null;
        $this->container['excludeFileType'] = isset($data['excludeFileType']) ? $data['excludeFileType'] : null;
        $this->container['protectMode'] = isset($data['protectMode']) ? $data['protectMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['exclueFileType']) && (mb_strlen($this->container['exclueFileType']) > 512)) {
                $invalidProperties[] = "invalid value for 'exclueFileType', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['exclueFileType']) && (mb_strlen($this->container['exclueFileType']) < 0)) {
                $invalidProperties[] = "invalid value for 'exclueFileType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['excludeFileType']) && (mb_strlen($this->container['excludeFileType']) > 512)) {
                $invalidProperties[] = "invalid value for 'excludeFileType', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['excludeFileType']) && (mb_strlen($this->container['excludeFileType']) < 0)) {
                $invalidProperties[] = "invalid value for 'excludeFileType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) > 128)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be bigger than or equal to 0.";
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
    * Gets protectDirList
    *  **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\WtpProtectHostDirResponseInfo[]|null
    */
    public function getProtectDirList()
    {
        return $this->container['protectDirList'];
    }

    /**
    * Sets protectDirList
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\WtpProtectHostDirResponseInfo[]|null $protectDirList **参数解释**: 防护目录列表 **取值范围**: 最少0条，最多50条
    *
    * @return $this
    */
    public function setProtectDirList($protectDirList)
    {
        $this->container['protectDirList'] = $protectDirList;
        return $this;
    }

    /**
    * Gets exclueFileType
    *  排除文件类型
    *
    * @return string|null
    */
    public function getExclueFileType()
    {
        return $this->container['exclueFileType'];
    }

    /**
    * Sets exclueFileType
    *
    * @param string|null $exclueFileType 排除文件类型
    *
    * @return $this
    */
    public function setExclueFileType($exclueFileType)
    {
        $this->container['exclueFileType'] = $exclueFileType;
        return $this;
    }

    /**
    * Gets excludeFileType
    *  **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    *
    * @return string|null
    */
    public function getExcludeFileType()
    {
        return $this->container['excludeFileType'];
    }

    /**
    * Sets excludeFileType
    *
    * @param string|null $excludeFileType **参数解释**: 排除文件类型 **取值范围**: 字符长度0-512位
    *
    * @return $this
    */
    public function setExcludeFileType($excludeFileType)
    {
        $this->container['excludeFileType'] = $excludeFileType;
        return $this;
    }

    /**
    * Gets protectMode
    *  **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @return string|null
    */
    public function getProtectMode()
    {
        return $this->container['protectMode'];
    }

    /**
    * Sets protectMode
    *
    * @param string|null $protectMode **参数解释**: 防护模式 **取值范围**: - recovery ：拦截模式。 - alarm ：告警模式。
    *
    * @return $this
    */
    public function setProtectMode($protectMode)
    {
        $this->container['protectMode'] = $protectMode;
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

