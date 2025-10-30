<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ImageNonCompliantAppInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ImageNonCompliantAppInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: id **取值范围**: 字符长度0-128位
    * appName  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'appName' => 'string',
            'appPath' => 'string',
            'appVersion' => 'string',
            'layerDigest' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: id **取值范围**: 字符长度0-128位
    * appName  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'appName' => null,
        'appPath' => null,
        'appVersion' => null,
        'layerDigest' => null
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
    * id  **参数解释**: id **取值范围**: 字符长度0-128位
    * appName  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'appName' => 'app_name',
            'appPath' => 'app_path',
            'appVersion' => 'app_version',
            'layerDigest' => 'layer_digest'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: id **取值范围**: 字符长度0-128位
    * appName  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'appName' => 'setAppName',
            'appPath' => 'setAppPath',
            'appVersion' => 'setAppVersion',
            'layerDigest' => 'setLayerDigest'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: id **取值范围**: 字符长度0-128位
    * appName  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    * appPath  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    * appVersion  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    * layerDigest  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'appName' => 'getAppName',
            'appPath' => 'getAppPath',
            'appVersion' => 'getAppVersion',
            'layerDigest' => 'getLayerDigest'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['appPath'] = isset($data['appPath']) ? $data['appPath'] : null;
        $this->container['appVersion'] = isset($data['appVersion']) ? $data['appVersion'] : null;
        $this->container['layerDigest'] = isset($data['layerDigest']) ? $data['layerDigest'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 128)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 0)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) > 128)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['appPath']) && (mb_strlen($this->container['appPath']) < 0)) {
                $invalidProperties[] = "invalid value for 'appPath', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appVersion']) && (mb_strlen($this->container['appVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'appVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['layerDigest']) && (mb_strlen($this->container['layerDigest']) > 128)) {
                $invalidProperties[] = "invalid value for 'layerDigest', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['layerDigest']) && (mb_strlen($this->container['layerDigest']) < 0)) {
                $invalidProperties[] = "invalid value for 'layerDigest', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**: id **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**: id **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets appName
    *  **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释**: 不合规软件名称 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets appPath
    *  **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getAppPath()
    {
        return $this->container['appPath'];
    }

    /**
    * Sets appPath
    *
    * @param string|null $appPath **参数解释**: 不合规软件路径 **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setAppPath($appPath)
    {
        $this->container['appPath'] = $appPath;
        return $this;
    }

    /**
    * Gets appVersion
    *  **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    *
    * @return string|null
    */
    public function getAppVersion()
    {
        return $this->container['appVersion'];
    }

    /**
    * Sets appVersion
    *
    * @param string|null $appVersion **参数解释**: 不合规软件版本 **取值范围**: 字符长度0-64位
    *
    * @return $this
    */
    public function setAppVersion($appVersion)
    {
        $this->container['appVersion'] = $appVersion;
        return $this;
    }

    /**
    * Gets layerDigest
    *  **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @return string|null
    */
    public function getLayerDigest()
    {
        return $this->container['layerDigest'];
    }

    /**
    * Sets layerDigest
    *
    * @param string|null $layerDigest **参数解释**: 层digest **取值范围**: 字符长度0-128位
    *
    * @return $this
    */
    public function setLayerDigest($layerDigest)
    {
        $this->container['layerDigest'] = $layerDigest;
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

