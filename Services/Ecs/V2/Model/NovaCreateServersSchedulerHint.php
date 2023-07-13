<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaCreateServersSchedulerHint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaCreateServersSchedulerHint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * group  反亲和性组信息。  UUID格式。
    * differentHost  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    * sameHost  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    * cidr  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    * buildNearHostIp  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    * tenancy  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'group' => 'string',
            'differentHost' => 'string[]',
            'sameHost' => 'string[]',
            'cidr' => 'string',
            'buildNearHostIp' => 'string',
            'tenancy' => 'string',
            'dedicatedHostId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * group  反亲和性组信息。  UUID格式。
    * differentHost  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    * sameHost  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    * cidr  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    * buildNearHostIp  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    * tenancy  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'group' => null,
        'differentHost' => null,
        'sameHost' => null,
        'cidr' => null,
        'buildNearHostIp' => null,
        'tenancy' => null,
        'dedicatedHostId' => null
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
    * group  反亲和性组信息。  UUID格式。
    * differentHost  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    * sameHost  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    * cidr  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    * buildNearHostIp  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    * tenancy  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'group' => 'group',
            'differentHost' => 'different_host',
            'sameHost' => 'same_host',
            'cidr' => 'cidr',
            'buildNearHostIp' => 'build_near_host_ip',
            'tenancy' => 'tenancy',
            'dedicatedHostId' => 'dedicated_host_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * group  反亲和性组信息。  UUID格式。
    * differentHost  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    * sameHost  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    * cidr  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    * buildNearHostIp  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    * tenancy  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @var string[]
    */
    protected static $setters = [
            'group' => 'setGroup',
            'differentHost' => 'setDifferentHost',
            'sameHost' => 'setSameHost',
            'cidr' => 'setCidr',
            'buildNearHostIp' => 'setBuildNearHostIp',
            'tenancy' => 'setTenancy',
            'dedicatedHostId' => 'setDedicatedHostId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * group  反亲和性组信息。  UUID格式。
    * differentHost  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    * sameHost  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    * cidr  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    * buildNearHostIp  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    * tenancy  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    * dedicatedHostId  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @var string[]
    */
    protected static $getters = [
            'group' => 'getGroup',
            'differentHost' => 'getDifferentHost',
            'sameHost' => 'getSameHost',
            'cidr' => 'getCidr',
            'buildNearHostIp' => 'getBuildNearHostIp',
            'tenancy' => 'getTenancy',
            'dedicatedHostId' => 'getDedicatedHostId'
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
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['differentHost'] = isset($data['differentHost']) ? $data['differentHost'] : null;
        $this->container['sameHost'] = isset($data['sameHost']) ? $data['sameHost'] : null;
        $this->container['cidr'] = isset($data['cidr']) ? $data['cidr'] : null;
        $this->container['buildNearHostIp'] = isset($data['buildNearHostIp']) ? $data['buildNearHostIp'] : null;
        $this->container['tenancy'] = isset($data['tenancy']) ? $data['tenancy'] : null;
        $this->container['dedicatedHostId'] = isset($data['dedicatedHostId']) ? $data['dedicatedHostId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets group
    *  反亲和性组信息。  UUID格式。
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group 反亲和性组信息。  UUID格式。
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets differentHost
    *  与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    *
    * @return string[]|null
    */
    public function getDifferentHost()
    {
        return $this->container['differentHost'];
    }

    /**
    * Sets differentHost
    *
    * @param string[]|null $differentHost 与指定弹性云服务器满足反亲和性。   当前不支持该功能。
    *
    * @return $this
    */
    public function setDifferentHost($differentHost)
    {
        $this->container['differentHost'] = $differentHost;
        return $this;
    }

    /**
    * Gets sameHost
    *  与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    *
    * @return string[]|null
    */
    public function getSameHost()
    {
        return $this->container['sameHost'];
    }

    /**
    * Sets sameHost
    *
    * @param string[]|null $sameHost 与指定的弹性云服务器满足亲和性。   当前不支持该功能。
    *
    * @return $this
    */
    public function setSameHost($sameHost)
    {
        $this->container['sameHost'] = $sameHost;
        return $this;
    }

    /**
    * Gets cidr
    *  将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    *
    * @return string|null
    */
    public function getCidr()
    {
        return $this->container['cidr'];
    }

    /**
    * Sets cidr
    *
    * @param string|null $cidr 将弹性云服务器scheduler到指定网段的host上，host网段的cidr。   当前不支持该功能。
    *
    * @return $this
    */
    public function setCidr($cidr)
    {
        $this->container['cidr'] = $cidr;
        return $this;
    }

    /**
    * Gets buildNearHostIp
    *  将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    *
    * @return string|null
    */
    public function getBuildNearHostIp()
    {
        return $this->container['buildNearHostIp'];
    }

    /**
    * Sets buildNearHostIp
    *
    * @param string|null $buildNearHostIp 将弹性云服务器scheduler到指定网段的host上，host IP地址。   当前不支持该功能。
    *
    * @return $this
    */
    public function setBuildNearHostIp($buildNearHostIp)
    {
        $this->container['buildNearHostIp'] = $buildNearHostIp;
        return $this;
    }

    /**
    * Gets tenancy
    *  在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    *
    * @return string|null
    */
    public function getTenancy()
    {
        return $this->container['tenancy'];
    }

    /**
    * Sets tenancy
    *
    * @param string|null $tenancy 在专属主机或共享池中创建弹性云服务器。默认为在共享池创建。 值为： shared 或dedicated。 shared：表示共享池。 dedicated:表示专属主机。 创建与查询此值均有效。
    *
    * @return $this
    */
    public function setTenancy($tenancy)
    {
        $this->container['tenancy'] = $tenancy;
        return $this;
    }

    /**
    * Gets dedicatedHostId
    *  专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @return string|null
    */
    public function getDedicatedHostId()
    {
        return $this->container['dedicatedHostId'];
    }

    /**
    * Sets dedicatedHostId
    *
    * @param string|null $dedicatedHostId 专属主机ID。 此属性仅在tenancy值为dedicated时有效。 不指定此属性，系统将自动分配租户可自动放置弹性云服务器的专属主机。 创建与查询此值均有效。
    *
    * @return $this
    */
    public function setDedicatedHostId($dedicatedHostId)
    {
        $this->container['dedicatedHostId'] = $dedicatedHostId;
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

