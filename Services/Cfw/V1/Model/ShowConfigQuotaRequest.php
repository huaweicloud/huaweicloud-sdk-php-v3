<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConfigQuotaRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConfigQuotaRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * configType  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    * setId  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'fwInstanceId' => 'string',
            'configType' => 'string',
            'setId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * configType  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    * setId  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'fwInstanceId' => null,
        'configType' => null,
        'setId' => null
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
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * configType  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    * setId  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'fwInstanceId' => 'fw_instance_id',
            'configType' => 'config_type',
            'setId' => 'set_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * configType  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    * setId  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'fwInstanceId' => 'setFwInstanceId',
            'configType' => 'setConfigType',
            'setId' => 'setSetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * fwInstanceId  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    * configType  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    * setId  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'fwInstanceId' => 'getFwInstanceId',
            'configType' => 'getConfigType',
            'setId' => 'getSetId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['fwInstanceId'] = isset($data['fwInstanceId']) ? $data['fwInstanceId'] : null;
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['fwInstanceId'] === null) {
            $invalidProperties[] = "'fwInstanceId' can't be null";
        }
            if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['fwInstanceId'])) {
                $invalidProperties[] = "invalid value for 'fwInstanceId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
        if ($this->container['configType'] === null) {
            $invalidProperties[] = "'configType' can't be null";
        }
            if ((mb_strlen($this->container['configType']) > 255)) {
                $invalidProperties[] = "invalid value for 'configType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['configType']) < 1)) {
                $invalidProperties[] = "invalid value for 'configType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['setId']) && !preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['setId'])) {
                $invalidProperties[] = "invalid value for 'setId', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
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
    * Gets projectId
    *  **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
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
    * @param string $projectId **参数解释**： 项目ID，用于明确项目归属，配置后可通过该ID查询项目下资产，可以从调API处获取，也可以从控制台获取。[项目ID获取方式](cfw_02_0015.xml) **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
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
    *  **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
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
    * @param string $fwInstanceId **参数解释**： 防火墙ID，用户创建防火墙实例后产生的唯一ID，配置后可区分不同防火墙，可通过[防火墙ID获取方式](cfw_02_0028.xml)获取 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setFwInstanceId($fwInstanceId)
    {
        $this->container['fwInstanceId'] = $fwInstanceId;
        return $this;
    }

    /**
    * Gets configType
    *  **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    *
    * @return string
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param string $configType **参数解释**： 防火墙配额类型 **约束限制**： 不涉及 **取值范围**：   ACL：ACL规则配额   DNS_DOMAIN_SET：网络域名组配额   DOMAIN：域名组域名成员配额   DOMAIN_DEVICE：域名设备配额   DNS_DOMAIN_SET_PARSE_IP：网络域名组解析IP配额   APPLICATION_DOMAIN_SET：应用域名组配额   APPLICATION_DOMAIN_SET_ITEM：应用域名组域名成员配额   APPLICATION_DOMAIN_SET_ITEM_DEVICE：应用域名组设备配额   ADDR_SET：地址组配额   ADDR_SET_ITEM：地址组IP地址成员配额   ADDR_SET_ITEM_DEVICE：地址组IP地址设备配额   SERV_SET：服务组配额   SERV_SET_ITEM：服务组服务成员配额   SERV_SET_ITEM_DEVICE：服务组服务设备配额   BLACKLIST：黑名单配额   WHITELIST：白名单配额   PRIVATE_NETWORK_SEGMENT：私网网段配额 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets setId
    *  **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string|null $setId **参数解释**： 组Id，查询IP地址组地址成员配额，域名组域名成员配额，服务组服务成员配额时必传，地址组id，可通过查询地址组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，域名组id，可通过查询域名组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得，服务组id，可通过获取服务组列表接口查询获得，通过返回值中的data.records.set_id（.表示各对象之间层级的区分）获得。 **约束限制**： 不涉及 **取值范围**： 32位UUID **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
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

