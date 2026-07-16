<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateCloudWafPostPaidResourceRequestbody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateCloudWafPostPaidResourceRequestbody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * consoleArea  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    * postpaidName  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    * extendParams  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'consoleArea' => 'string',
            'postpaidName' => 'string',
            'extendParams' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * consoleArea  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    * postpaidName  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    * extendParams  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'consoleArea' => null,
        'postpaidName' => null,
        'extendParams' => null
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
    * consoleArea  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    * postpaidName  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    * extendParams  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'consoleArea' => 'console_area',
            'postpaidName' => 'postpaid_name',
            'extendParams' => 'extend_params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * consoleArea  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    * postpaidName  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    * extendParams  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'consoleArea' => 'setConsoleArea',
            'postpaidName' => 'setPostpaidName',
            'extendParams' => 'setExtendParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * consoleArea  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    * postpaidName  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    * extendParams  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'consoleArea' => 'getConsoleArea',
            'postpaidName' => 'getPostpaidName',
            'extendParams' => 'getExtendParams'
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
        $this->container['consoleArea'] = isset($data['consoleArea']) ? $data['consoleArea'] : null;
        $this->container['postpaidName'] = isset($data['postpaidName']) ? $data['postpaidName'] : null;
        $this->container['extendParams'] = isset($data['extendParams']) ? $data['extendParams'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['consoleArea'] === null) {
            $invalidProperties[] = "'consoleArea' can't be null";
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
    * Gets consoleArea
    *  租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    *
    * @return string
    */
    public function getConsoleArea()
    {
        return $this->container['consoleArea'];
    }

    /**
    * Sets consoleArea
    *
    * @param string $consoleArea 租户所在的站点 - hec-hk：华为云国际站 - hws：华为云大陆站
    *
    * @return $this
    */
    public function setConsoleArea($consoleArea)
    {
        $this->container['consoleArea'] = $consoleArea;
        return $this;
    }

    /**
    * Gets postpaidName
    *  **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    *
    * @return string|null
    */
    public function getPostpaidName()
    {
        return $this->container['postpaidName'];
    }

    /**
    * Sets postpaidName
    *
    * @param string|null $postpaidName **参数解释：** 按需功能名称 **取值范围：**  - CLOUD_WAF：按需云模式  - LARGE_MODEL_FIREWALL_AI_GUARD_DETECT: AI安全护栏
    *
    * @return $this
    */
    public function setPostpaidName($postpaidName)
    {
        $this->container['postpaidName'] = $postpaidName;
        return $this;
    }

    /**
    * Gets extendParams
    *  **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @return object|null
    */
    public function getExtendParams()
    {
        return $this->container['extendParams'];
    }

    /**
    * Sets extendParams
    *
    * @param object|null $extendParams **参数解释：** 扩展参数 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setExtendParams($extendParams)
    {
        $this->container['extendParams'] = $extendParams;
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

