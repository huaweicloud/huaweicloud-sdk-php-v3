<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDomainParseIpRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDomainParseIpRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * addressType  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    * domainAddressId  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetId  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'addressType' => 'int',
            'domainAddressId' => 'string',
            'domainSetId' => 'string',
            'projectId' => 'string',
            'fwInstanceId' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * addressType  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    * domainAddressId  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetId  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'addressType' => null,
        'domainAddressId' => null,
        'domainSetId' => null,
        'projectId' => null,
        'fwInstanceId' => null,
        'enterpriseProjectId' => null
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
    * addressType  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    * domainAddressId  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetId  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'addressType' => 'address_type',
            'domainAddressId' => 'domain_address_id',
            'domainSetId' => 'domain_set_id',
            'projectId' => 'project_id',
            'fwInstanceId' => 'fw_instance_id',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * addressType  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    * domainAddressId  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetId  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $setters = [
            'addressType' => 'setAddressType',
            'domainAddressId' => 'setDomainAddressId',
            'domainSetId' => 'setDomainSetId',
            'projectId' => 'setProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * addressType  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    * domainAddressId  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * domainSetId  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    * projectId  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    * enterpriseProjectId  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @var string[]
    */
    protected static $getters = [
            'addressType' => 'getAddressType',
            'domainAddressId' => 'getDomainAddressId',
            'domainSetId' => 'getDomainSetId',
            'projectId' => 'getProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['addressType'] = isset($data['addressType']) ? $data['addressType'] : null;
        $this->container['domainAddressId'] = isset($data['domainAddressId']) ? $data['domainAddressId'] : null;
        $this->container['domainSetId'] = isset($data['domainSetId']) ? $data['domainSetId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainAddressId'] === null) {
            $invalidProperties[] = "'domainAddressId' can't be null";
        }
        if ($this->container['domainSetId'] === null) {
            $invalidProperties[] = "'domainSetId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
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
    * Gets addressType
    *  **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAddressType()
    {
        return $this->container['addressType'];
    }

    /**
    * Sets addressType
    *
    * @param int|null $addressType **参数解释**： 地址类型 **约束限制**： 不涉及 **取值范围**： - 0：ipv4 - 1：ipv6 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAddressType($addressType)
    {
        $this->container['addressType'] = $addressType;
        return $this;
    }

    /**
    * Gets domainAddressId
    *  **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDomainAddressId()
    {
        return $this->container['domainAddressId'];
    }

    /**
    * Sets domainAddressId
    *
    * @param string $domainAddressId **参数解释**： 域名id，域名id可通过[获取域名组下域名列表接口](ListDomains.xml)查询获得，通过返回值中的data.records.domain_address_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainAddressId($domainAddressId)
    {
        $this->container['domainAddressId'] = $domainAddressId;
        return $this;
    }

    /**
    * Gets domainSetId
    *  **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getDomainSetId()
    {
        return $this->container['domainSetId'];
    }

    /**
    * Sets domainSetId
    *
    * @param string $domainSetId **参数解释**： 域名组ID，可通过[查询域名组列表接口](ListDomainSets.xml)查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获取 **约束限制**： 仅网络型域名组需填写此参数 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDomainSetId($domainSetId)
    {
        $this->container['domainSetId'] = $domainSetId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId **参数解释**： 项目ID，可以通过调用API获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets fwInstanceId
    *  **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getFwInstanceId()
    {
        return $this->container['fwInstanceId'];
    }

    /**
    * Sets fwInstanceId
    *
    * @param string $fwInstanceId **参数解释**： 防火墙ID，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId **参数解释**： 企业项目ID，用户根据组织规划企业项目，对应的ID为企业项目ID，配置后可根据企业项目过滤不同企业项目下的资产，可通过[如何获取企业项目ID](cfw_02_0027.xml)获取 **约束限制**： 不涉及 **取值范围**： 不涉及 **默认取值**： 0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

