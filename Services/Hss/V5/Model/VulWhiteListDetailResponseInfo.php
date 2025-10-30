<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulWhiteListDetailResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulWhiteListDetailResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 白名单id **取值范围**: 字符长度0-256
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    * vulType  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * cves  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    * ruleType  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    * hosts  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    * description  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'vulId' => 'string',
            'vulName' => 'string',
            'vulType' => 'string',
            'cves' => '\HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoCves[]',
            'ruleType' => 'string',
            'hosts' => '\HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoHosts[]',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 白名单id **取值范围**: 字符长度0-256
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    * vulType  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * cves  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    * ruleType  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    * hosts  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    * description  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'vulId' => null,
        'vulName' => null,
        'vulType' => null,
        'cves' => null,
        'ruleType' => null,
        'hosts' => null,
        'description' => null
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
    * id  **参数解释**: 白名单id **取值范围**: 字符长度0-256
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    * vulType  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * cves  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    * ruleType  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    * hosts  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    * description  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'vulId' => 'vul_id',
            'vulName' => 'vul_name',
            'vulType' => 'vul_type',
            'cves' => 'cves',
            'ruleType' => 'rule_type',
            'hosts' => 'hosts',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 白名单id **取值范围**: 字符长度0-256
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    * vulType  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * cves  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    * ruleType  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    * hosts  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    * description  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'vulId' => 'setVulId',
            'vulName' => 'setVulName',
            'vulType' => 'setVulType',
            'cves' => 'setCves',
            'ruleType' => 'setRuleType',
            'hosts' => 'setHosts',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 白名单id **取值范围**: 字符长度0-256
    * vulId  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    * vulName  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    * vulType  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    * cves  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    * ruleType  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    * hosts  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    * description  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'vulId' => 'getVulId',
            'vulName' => 'getVulName',
            'vulType' => 'getVulType',
            'cves' => 'getCves',
            'ruleType' => 'getRuleType',
            'hosts' => 'getHosts',
            'description' => 'getDescription'
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
        $this->container['vulId'] = isset($data['vulId']) ? $data['vulId'] : null;
        $this->container['vulName'] = isset($data['vulName']) ? $data['vulName'] : null;
        $this->container['vulType'] = isset($data['vulType']) ? $data['vulType'] : null;
        $this->container['cves'] = isset($data['cves']) ? $data['cves'] : null;
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['hosts'] = isset($data['hosts']) ? $data['hosts'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 256)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulId']) && (mb_strlen($this->container['vulId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) > 256)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['vulName']) && (mb_strlen($this->container['vulName']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) > 32)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['vulType']) && (mb_strlen($this->container['vulType']) < 0)) {
                $invalidProperties[] = "invalid value for 'vulType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) > 32)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['ruleType']) && (mb_strlen($this->container['ruleType']) < 0)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
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
    *  **参数解释**: 白名单id **取值范围**: 字符长度0-256
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
    * @param string|null $id **参数解释**: 白名单id **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets vulId
    *  **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    *
    * @return string|null
    */
    public function getVulId()
    {
        return $this->container['vulId'];
    }

    /**
    * Sets vulId
    *
    * @param string|null $vulId **参数解释**: 漏洞id **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setVulId($vulId)
    {
        $this->container['vulId'] = $vulId;
        return $this;
    }

    /**
    * Gets vulName
    *  **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    *
    * @return string|null
    */
    public function getVulName()
    {
        return $this->container['vulName'];
    }

    /**
    * Sets vulName
    *
    * @param string|null $vulName **参数解释**: 漏洞名称 **取值范围**: 字符长度0-256
    *
    * @return $this
    */
    public function setVulName($vulName)
    {
        $this->container['vulName'] = $vulName;
        return $this;
    }

    /**
    * Gets vulType
    *  **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    *
    * @return string|null
    */
    public function getVulType()
    {
        return $this->container['vulType'];
    }

    /**
    * Sets vulType
    *
    * @param string|null $vulType **参数解释**: 漏洞类型 **取值范围**: - linux_vul：linux漏洞 - windows_vul：windows漏洞 - web_cms：Web-CMS漏洞 - app_vul：应用漏洞
    *
    * @return $this
    */
    public function setVulType($vulType)
    {
        $this->container['vulType'] = $vulType;
        return $this;
    }

    /**
    * Gets cves
    *  **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoCves[]|null
    */
    public function getCves()
    {
        return $this->container['cves'];
    }

    /**
    * Sets cves
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoCves[]|null $cves **参数解释**: 漏洞对应的cve列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setCves($cves)
    {
        $this->container['cves'] = $cves;
        return $this;
    }

    /**
    * Gets ruleType
    *  **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    *
    * @return string|null
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string|null $ruleType **参数解释**: 白名单规则类型 **取值范围**: - all_host：白名单应用于全部主机 - specific_host：白名单应用于指定主机
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets hosts
    *  **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoHosts[]|null
    */
    public function getHosts()
    {
        return $this->container['hosts'];
    }

    /**
    * Sets hosts
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\VulWhiteListDetailResponseInfoHosts[]|null $hosts **参数解释**: 白名单规则为“指定主机”时，指定的主机列表 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setHosts($hosts)
    {
        $this->container['hosts'] = $hosts;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
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
    * @param string|null $description **参数解释**: 白名单的描述信息 **取值范围**: 字符长度0-1000
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

