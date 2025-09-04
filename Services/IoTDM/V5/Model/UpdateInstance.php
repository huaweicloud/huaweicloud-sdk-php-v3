<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstance implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstance';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    * operateWindow  operateWindow
    * forwardingInfo  forwardingInfo
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'operateWindow' => '\HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow',
            'forwardingInfo' => '\HuaweiCloud\SDK\IoTDM\V5\Model\UpdateForwardingInfo',
            'accessInfo' => '\HuaweiCloud\SDK\IoTDM\V5\Model\UpdateAccessInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    * operateWindow  operateWindow
    * forwardingInfo  forwardingInfo
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'operateWindow' => null,
        'forwardingInfo' => null,
        'accessInfo' => null
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
    * name  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    * operateWindow  operateWindow
    * forwardingInfo  forwardingInfo
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'operateWindow' => 'operate_window',
            'forwardingInfo' => 'forwarding_info',
            'accessInfo' => 'access_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    * operateWindow  operateWindow
    * forwardingInfo  forwardingInfo
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'operateWindow' => 'setOperateWindow',
            'forwardingInfo' => 'setForwardingInfo',
            'accessInfo' => 'setAccessInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    * description  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    * operateWindow  operateWindow
    * forwardingInfo  forwardingInfo
    * accessInfo  accessInfo
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'operateWindow' => 'getOperateWindow',
            'forwardingInfo' => 'getForwardingInfo',
            'accessInfo' => 'getAccessInfo'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['operateWindow'] = isset($data['operateWindow']) ? $data['operateWindow'] : null;
        $this->container['forwardingInfo'] = isset($data['forwardingInfo']) ? $data['forwardingInfo'] : null;
        $this->container['accessInfo'] = isset($data['accessInfo']) ? $data['accessInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && !preg_match("/^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z0-9_\\-\\u4e00-\\u9fa5]{1,64}$/.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[A-Za-z0-9_，,.。、&\\-\\s\\u4e00-\\u9fa5]{0,256}$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[A-Za-z0-9_，,.。、&\\-\\s\\u4e00-\\u9fa5]{0,256}$/.";
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
    * Gets name
    *  **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
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
    * @param string|null $name **参数说明**：实例名称。 **取值范围**：由中文字符，英文字母、数字及“_”、“-”组成，且长度为[1-64]个字符。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
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
    * @param string|null $description **参数说明**：设备接入实例的描述信息。 **取值范围**：长度不超过256，只允许中文、字母、数字、以及_，,.。、&-等字符的组合
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets operateWindow
    *  operateWindow
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null
    */
    public function getOperateWindow()
    {
        return $this->container['operateWindow'];
    }

    /**
    * Sets operateWindow
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null $operateWindow operateWindow
    *
    * @return $this
    */
    public function setOperateWindow($operateWindow)
    {
        $this->container['operateWindow'] = $operateWindow;
        return $this;
    }

    /**
    * Gets forwardingInfo
    *  forwardingInfo
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\UpdateForwardingInfo|null
    */
    public function getForwardingInfo()
    {
        return $this->container['forwardingInfo'];
    }

    /**
    * Sets forwardingInfo
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\UpdateForwardingInfo|null $forwardingInfo forwardingInfo
    *
    * @return $this
    */
    public function setForwardingInfo($forwardingInfo)
    {
        $this->container['forwardingInfo'] = $forwardingInfo;
        return $this;
    }

    /**
    * Gets accessInfo
    *  accessInfo
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\UpdateAccessInfo|null
    */
    public function getAccessInfo()
    {
        return $this->container['accessInfo'];
    }

    /**
    * Sets accessInfo
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\UpdateAccessInfo|null $accessInfo accessInfo
    *
    * @return $this
    */
    public function setAccessInfo($accessInfo)
    {
        $this->container['accessInfo'] = $accessInfo;
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

