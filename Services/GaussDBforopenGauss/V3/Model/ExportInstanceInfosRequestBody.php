<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportInstanceInfosRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportInstanceInfosRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceList  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    * userDefinedColumns  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    * timeZone  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    * language  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceList' => 'string[]',
            'userDefinedColumns' => 'string[]',
            'timeZone' => 'string',
            'language' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceList  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    * userDefinedColumns  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    * timeZone  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    * language  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceList' => null,
        'userDefinedColumns' => null,
        'timeZone' => null,
        'language' => null
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
    * instanceList  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    * userDefinedColumns  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    * timeZone  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    * language  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceList' => 'instance_list',
            'userDefinedColumns' => 'user_defined_columns',
            'timeZone' => 'time_zone',
            'language' => 'language'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceList  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    * userDefinedColumns  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    * timeZone  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    * language  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceList' => 'setInstanceList',
            'userDefinedColumns' => 'setUserDefinedColumns',
            'timeZone' => 'setTimeZone',
            'language' => 'setLanguage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceList  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    * userDefinedColumns  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    * timeZone  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    * language  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceList' => 'getInstanceList',
            'userDefinedColumns' => 'getUserDefinedColumns',
            'timeZone' => 'getTimeZone',
            'language' => 'getLanguage'
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
        $this->container['instanceList'] = isset($data['instanceList']) ? $data['instanceList'] : null;
        $this->container['userDefinedColumns'] = isset($data['userDefinedColumns']) ? $data['userDefinedColumns'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['userDefinedColumns'] === null) {
            $invalidProperties[] = "'userDefinedColumns' can't be null";
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
    * Gets instanceList
    *  **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    *
    * @return string[]|null
    */
    public function getInstanceList()
    {
        return $this->container['instanceList'];
    }

    /**
    * Sets instanceList
    *
    * @param string[]|null $instanceList **参数解释**:   实例id列表。 **约束限制**:   不涉及。 **取值范围**:   不涉及 **默认取值**:   不涉及。
    *
    * @return $this
    */
    public function setInstanceList($instanceList)
    {
        $this->container['instanceList'] = $instanceList;
        return $this;
    }

    /**
    * Gets userDefinedColumns
    *  **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    *
    * @return string[]
    */
    public function getUserDefinedColumns()
    {
        return $this->container['userDefinedColumns'];
    }

    /**
    * Sets userDefinedColumns
    *
    * @param string[] $userDefinedColumns **参数解释**:   导出字段列表。 **约束限制**:   不涉及。 **取值范围**:   - name：实例名称   - id：实例ID   - alias：实例备注   - editionMode：产品类型   - haModel：实例类型   - deployMode：部署形态   - engine：数据库引擎版本   - hotfixVersions：已升级热补丁   - instanceStatus：实例状态   - payModel：计费模式   - targetEngineVersion：目标版本   - flavor：性能规格   - availableZones：可用区   - privateIp：内网地址   - dnsName：DNS   - ipv6：IPv6地址   - dbPort：数据库端口   - publicIp：弹性公网IP   - createAt：创建时间   - volumeType：存储空间类型   - volumeSize：存储空间大小   - vpcName：虚拟私有云名称   - vpcId：虚拟私有云ID   - securityGroupName：安全组   - enterpriseProjectName：企业项目  **默认取值**:   不涉及。
    *
    * @return $this
    */
    public function setUserDefinedColumns($userDefinedColumns)
    {
        $this->container['userDefinedColumns'] = $userDefinedColumns;
        return $this;
    }

    /**
    * Gets timeZone
    *  **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone **参数解释**:   时区。 **约束限制**:   不涉及。 **取值范围**:   - +08:00 **默认取值**:   +08:00
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
        return $this;
    }

    /**
    * Gets language
    *  **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @return string|null
    */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
    * Sets language
    *
    * @param string|null $language **参数解释**:   语言。 **约束限制**:   不涉及。 **取值范围**:   - zh-cn    - en-us  **默认取值**:   zh-cn
    *
    * @return $this
    */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;
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

