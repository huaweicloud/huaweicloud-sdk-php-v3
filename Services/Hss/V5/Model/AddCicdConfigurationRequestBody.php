<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AddCicdConfigurationRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AddCicdConfigurationRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cicdName  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    * vulnerabilityWhitelist  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * vulnerabilityBlocklist  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * imageWhitelist  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cicdName' => 'string',
            'vulnerabilityWhitelist' => 'string[]',
            'vulnerabilityBlocklist' => 'string[]',
            'imageWhitelist' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cicdName  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    * vulnerabilityWhitelist  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * vulnerabilityBlocklist  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * imageWhitelist  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cicdName' => null,
        'vulnerabilityWhitelist' => null,
        'vulnerabilityBlocklist' => null,
        'imageWhitelist' => null
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
    * cicdName  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    * vulnerabilityWhitelist  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * vulnerabilityBlocklist  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * imageWhitelist  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cicdName' => 'cicd_name',
            'vulnerabilityWhitelist' => 'vulnerability_whitelist',
            'vulnerabilityBlocklist' => 'vulnerability_blocklist',
            'imageWhitelist' => 'image_whitelist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cicdName  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    * vulnerabilityWhitelist  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * vulnerabilityBlocklist  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * imageWhitelist  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'cicdName' => 'setCicdName',
            'vulnerabilityWhitelist' => 'setVulnerabilityWhitelist',
            'vulnerabilityBlocklist' => 'setVulnerabilityBlocklist',
            'imageWhitelist' => 'setImageWhitelist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cicdName  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    * vulnerabilityWhitelist  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * vulnerabilityBlocklist  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    * imageWhitelist  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'cicdName' => 'getCicdName',
            'vulnerabilityWhitelist' => 'getVulnerabilityWhitelist',
            'vulnerabilityBlocklist' => 'getVulnerabilityBlocklist',
            'imageWhitelist' => 'getImageWhitelist'
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
        $this->container['cicdName'] = isset($data['cicdName']) ? $data['cicdName'] : null;
        $this->container['vulnerabilityWhitelist'] = isset($data['vulnerabilityWhitelist']) ? $data['vulnerabilityWhitelist'] : null;
        $this->container['vulnerabilityBlocklist'] = isset($data['vulnerabilityBlocklist']) ? $data['vulnerabilityBlocklist'] : null;
        $this->container['imageWhitelist'] = isset($data['imageWhitelist']) ? $data['imageWhitelist'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['cicdName'] === null) {
            $invalidProperties[] = "'cicdName' can't be null";
        }
            if ((mb_strlen($this->container['cicdName']) > 128)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['cicdName']) < 1)) {
                $invalidProperties[] = "invalid value for 'cicdName', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['cicdName'])) {
                $invalidProperties[] = "invalid value for 'cicdName', must be conform to the pattern /^.*$/.";
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
    * Gets cicdName
    *  **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    *
    * @return string
    */
    public function getCicdName()
    {
        return $this->container['cicdName'];
    }

    /**
    * Sets cicdName
    *
    * @param string $cicdName **参数解释** cicd配置信息 **约束限制** 不涉及 **取值范围** 字符长度1-128位 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setCicdName($cicdName)
    {
        $this->container['cicdName'] = $cicdName;
        return $this;
    }

    /**
    * Gets vulnerabilityWhitelist
    *  **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return string[]|null
    */
    public function getVulnerabilityWhitelist()
    {
        return $this->container['vulnerabilityWhitelist'];
    }

    /**
    * Sets vulnerabilityWhitelist
    *
    * @param string[]|null $vulnerabilityWhitelist **参数解释** 漏洞白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setVulnerabilityWhitelist($vulnerabilityWhitelist)
    {
        $this->container['vulnerabilityWhitelist'] = $vulnerabilityWhitelist;
        return $this;
    }

    /**
    * Gets vulnerabilityBlocklist
    *  **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return string[]|null
    */
    public function getVulnerabilityBlocklist()
    {
        return $this->container['vulnerabilityBlocklist'];
    }

    /**
    * Sets vulnerabilityBlocklist
    *
    * @param string[]|null $vulnerabilityBlocklist **参数解释** 漏洞黑名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setVulnerabilityBlocklist($vulnerabilityBlocklist)
    {
        $this->container['vulnerabilityBlocklist'] = $vulnerabilityBlocklist;
        return $this;
    }

    /**
    * Gets imageWhitelist
    *  **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return string[]|null
    */
    public function getImageWhitelist()
    {
        return $this->container['imageWhitelist'];
    }

    /**
    * Sets imageWhitelist
    *
    * @param string[]|null $imageWhitelist **参数解释** 镜像白名单 **约束限制** 不涉及 **取值范围** 最小值0，最大值1000 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setImageWhitelist($imageWhitelist)
    {
        $this->container['imageWhitelist'] = $imageWhitelist;
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

