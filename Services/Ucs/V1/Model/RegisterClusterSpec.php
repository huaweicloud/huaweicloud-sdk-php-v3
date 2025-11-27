<?php

namespace HuaweiCloud\SDK\Ucs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RegisterClusterSpec implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RegisterCluster_spec';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * clusterGroupId  容器舰队ID信息。
    * category  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * type  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * provider  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * country  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    * city  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    * region  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    * projectId  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    * manageType  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * network  network
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'clusterGroupId' => 'string',
            'category' => 'string',
            'type' => 'string',
            'provider' => 'string',
            'country' => 'string',
            'city' => 'string',
            'region' => 'string',
            'projectId' => 'string',
            'manageType' => 'string',
            'network' => '\HuaweiCloud\SDK\Ucs\V1\Model\NetworkConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * clusterGroupId  容器舰队ID信息。
    * category  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * type  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * provider  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * country  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    * city  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    * region  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    * projectId  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    * manageType  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * network  network
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'clusterGroupId' => null,
        'category' => null,
        'type' => null,
        'provider' => null,
        'country' => null,
        'city' => null,
        'region' => null,
        'projectId' => null,
        'manageType' => null,
        'network' => null
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
    * clusterGroupId  容器舰队ID信息。
    * category  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * type  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * provider  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * country  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    * city  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    * region  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    * projectId  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    * manageType  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * network  network
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'clusterGroupId' => 'clusterGroupID',
            'category' => 'category',
            'type' => 'type',
            'provider' => 'provider',
            'country' => 'country',
            'city' => 'city',
            'region' => 'region',
            'projectId' => 'projectID',
            'manageType' => 'manageType',
            'network' => 'network'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * clusterGroupId  容器舰队ID信息。
    * category  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * type  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * provider  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * country  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    * city  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    * region  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    * projectId  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    * manageType  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * network  network
    *
    * @var string[]
    */
    protected static $setters = [
            'clusterGroupId' => 'setClusterGroupId',
            'category' => 'setCategory',
            'type' => 'setType',
            'provider' => 'setProvider',
            'country' => 'setCountry',
            'city' => 'setCity',
            'region' => 'setRegion',
            'projectId' => 'setProjectId',
            'manageType' => 'setManageType',
            'network' => 'setNetwork'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * clusterGroupId  容器舰队ID信息。
    * category  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * type  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * provider  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    * country  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    * city  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    * region  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    * projectId  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    * manageType  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    * network  network
    *
    * @var string[]
    */
    protected static $getters = [
            'clusterGroupId' => 'getClusterGroupId',
            'category' => 'getCategory',
            'type' => 'getType',
            'provider' => 'getProvider',
            'country' => 'getCountry',
            'city' => 'getCity',
            'region' => 'getRegion',
            'projectId' => 'getProjectId',
            'manageType' => 'getManageType',
            'network' => 'getNetwork'
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
        $this->container['clusterGroupId'] = isset($data['clusterGroupId']) ? $data['clusterGroupId'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['manageType'] = isset($data['manageType']) ? $data['manageType'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['category'] === null) {
            $invalidProperties[] = "'category' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['provider'] === null) {
            $invalidProperties[] = "'provider' can't be null";
        }
        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalidProperties[] = "'city' can't be null";
        }
        if ($this->container['manageType'] === null) {
            $invalidProperties[] = "'manageType' can't be null";
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
    * Gets clusterGroupId
    *  容器舰队ID信息。
    *
    * @return string|null
    */
    public function getClusterGroupId()
    {
        return $this->container['clusterGroupId'];
    }

    /**
    * Sets clusterGroupId
    *
    * @param string|null $clusterGroupId 容器舰队ID信息。
    *
    * @return $this
    */
    public function setClusterGroupId($clusterGroupId)
    {
        $this->container['clusterGroupId'] = $clusterGroupId;
        return $this;
    }

    /**
    * Gets category
    *  集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return string
    */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
    * Sets category
    *
    * @param string $category 集群类别，填写需要与provider和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return $this
    */
    public function setCategory($category)
    {
        $this->container['category'] = $category;
        return $this;
    }

    /**
    * Gets type
    *  集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 集群类型，填写需要与category和provider对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets provider
    *  供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return string
    */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
    * Sets provider
    *
    * @param string $provider 供应商，填写需要与category和type对应，具体请参见[集群类别与类型说明](ucs_api_0024.xml)。
    *
    * @return $this
    */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;
        return $this;
    }

    /**
    * Gets country
    *  所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    *
    * @return string
    */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
    * Sets country
    *
    * @param string $country 所在国家代码，具体代码请参见[国家码](ucs_api_0022.xml)。
    *
    * @return $this
    */
    public function setCountry($country)
    {
        $this->container['country'] = $country;
        return $this;
    }

    /**
    * Gets city
    *  所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    *
    * @return string
    */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
    * Sets city
    *
    * @param string $city 所在城市代码，具体代码请参见[城市码](ucs_api_0023.xml)。仅支持中国城市，其他国家无需填写。
    *
    * @return $this
    */
    public function setCity($city)
    {
        $this->container['city'] = $city;
        return $this;
    }

    /**
    * Gets region
    *  地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 地域信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的region字段获取。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 项目ID信息。仅在CCE导入集群注册时使用。可通过[获取未注册到UCS的CCE集群](ListManagedClusters.xml)接口的projectID字段获取。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets manageType
    *  集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    *
    * @return string
    */
    public function getManageType()
    {
        return $this->container['manageType'];
    }

    /**
    * Sets manageType
    *
    * @param string $manageType 集群管理类型信息。 取值如下： - grouped：在舰队中纳管的集群 - discrete：未加入舰队的集群
    *
    * @return $this
    */
    public function setManageType($manageType)
    {
        $this->container['manageType'] = $manageType;
        return $this;
    }

    /**
    * Gets network
    *  network
    *
    * @return \HuaweiCloud\SDK\Ucs\V1\Model\NetworkConfig|null
    */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
    * Sets network
    *
    * @param \HuaweiCloud\SDK\Ucs\V1\Model\NetworkConfig|null $network network
    *
    * @return $this
    */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;
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

