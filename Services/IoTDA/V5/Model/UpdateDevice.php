<?php

namespace HuaweiCloud\SDK\IoTDA\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateDevice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateDevice';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * deviceName  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * extensionInfo  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    * authInfo  authInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'deviceName' => 'string',
            'description' => 'string',
            'extensionInfo' => 'object',
            'authInfo' => '\HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoWithoutSecret'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * deviceName  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * extensionInfo  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    * authInfo  authInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'deviceName' => null,
        'description' => null,
        'extensionInfo' => null,
        'authInfo' => null
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
    * deviceName  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * extensionInfo  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    * authInfo  authInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'deviceName' => 'device_name',
            'description' => 'description',
            'extensionInfo' => 'extension_info',
            'authInfo' => 'auth_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * deviceName  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * extensionInfo  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    * authInfo  authInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'deviceName' => 'setDeviceName',
            'description' => 'setDescription',
            'extensionInfo' => 'setExtensionInfo',
            'authInfo' => 'setAuthInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * deviceName  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * description  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    * extensionInfo  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    * authInfo  authInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'deviceName' => 'getDeviceName',
            'description' => 'getDescription',
            'extensionInfo' => 'getExtensionInfo',
            'authInfo' => 'getAuthInfo'
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
        $this->container['deviceName'] = isset($data['deviceName']) ? $data['deviceName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['extensionInfo'] = isset($data['extensionInfo']) ? $data['extensionInfo'] : null;
        $this->container['authInfo'] = isset($data['authInfo']) ? $data['authInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) > 256)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['deviceName']) && (mb_strlen($this->container['deviceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'deviceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['deviceName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/", $this->container['deviceName'])) {
                $invalidProperties[] = "invalid value for 'deviceName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_?'#()\\.,&%@!-]*$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 2048)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_? '#()\\.,&%@!-]*$/.";
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
    * Gets deviceName
    *  **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return string|null
    */
    public function getDeviceName()
    {
        return $this->container['deviceName'];
    }

    /**
    * Sets deviceName
    *
    * @param string|null $deviceName **参数说明**：设备名称。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setDeviceName($deviceName)
    {
        $this->container['deviceName'] = $deviceName;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数说明**：设备的描述信息。 **取值范围**：长度不超过2048，只允许中文、字母、数字、以及_?'#().,&%@!-等字符的组合
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets extensionInfo
    *  **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    *
    * @return object|null
    */
    public function getExtensionInfo()
    {
        return $this->container['extensionInfo'];
    }

    /**
    * Sets extensionInfo
    *
    * @param object|null $extensionInfo **参数说明**：设备扩展信息。用户可以自定义任何想要的扩展信息，修改子设备信息时不会下发给网关。
    *
    * @return $this
    */
    public function setExtensionInfo($extensionInfo)
    {
        $this->container['extensionInfo'] = $extensionInfo;
        return $this;
    }

    /**
    * Gets authInfo
    *  authInfo
    *
    * @return \HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoWithoutSecret|null
    */
    public function getAuthInfo()
    {
        return $this->container['authInfo'];
    }

    /**
    * Sets authInfo
    *
    * @param \HuaweiCloud\SDK\IoTDA\V5\Model\AuthInfoWithoutSecret|null $authInfo authInfo
    *
    * @return $this
    */
    public function setAuthInfo($authInfo)
    {
        $this->container['authInfo'] = $authInfo;
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

