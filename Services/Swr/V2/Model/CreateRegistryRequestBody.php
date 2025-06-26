<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRegistryRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRegistryRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  目标仓库描述
    * type  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    * projectId  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    * regionId  区域ID，当type为swr-pro-internal时必填
    * instanceId  企业仓库实例ID，当type为swr-pro-internal时必填
    * url  目标仓库的地址
    * credential  credential
    * dnsConf  dnsConf
    * insecure  是否验证远程证书
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'type' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'instanceId' => 'string',
            'url' => 'string',
            'credential' => '\HuaweiCloud\SDK\Swr\V2\Model\Credential',
            'dnsConf' => '\HuaweiCloud\SDK\Swr\V2\Model\DnsConf',
            'insecure' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  目标仓库描述
    * type  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    * projectId  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    * regionId  区域ID，当type为swr-pro-internal时必填
    * instanceId  企业仓库实例ID，当type为swr-pro-internal时必填
    * url  目标仓库的地址
    * credential  credential
    * dnsConf  dnsConf
    * insecure  是否验证远程证书
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'type' => null,
        'projectId' => null,
        'regionId' => null,
        'instanceId' => null,
        'url' => null,
        'credential' => null,
        'dnsConf' => null,
        'insecure' => null
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
    * name  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  目标仓库描述
    * type  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    * projectId  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    * regionId  区域ID，当type为swr-pro-internal时必填
    * instanceId  企业仓库实例ID，当type为swr-pro-internal时必填
    * url  目标仓库的地址
    * credential  credential
    * dnsConf  dnsConf
    * insecure  是否验证远程证书
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'type' => 'type',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'instanceId' => 'instance_id',
            'url' => 'url',
            'credential' => 'credential',
            'dnsConf' => 'dns_conf',
            'insecure' => 'insecure'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  目标仓库描述
    * type  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    * projectId  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    * regionId  区域ID，当type为swr-pro-internal时必填
    * instanceId  企业仓库实例ID，当type为swr-pro-internal时必填
    * url  目标仓库的地址
    * credential  credential
    * dnsConf  dnsConf
    * insecure  是否验证远程证书
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'type' => 'setType',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'instanceId' => 'setInstanceId',
            'url' => 'setUrl',
            'credential' => 'setCredential',
            'dnsConf' => 'setDnsConf',
            'insecure' => 'setInsecure'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    * description  目标仓库描述
    * type  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    * projectId  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    * regionId  区域ID，当type为swr-pro-internal时必填
    * instanceId  企业仓库实例ID，当type为swr-pro-internal时必填
    * url  目标仓库的地址
    * credential  credential
    * dnsConf  dnsConf
    * insecure  是否验证远程证书
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'type' => 'getType',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'instanceId' => 'getInstanceId',
            'url' => 'getUrl',
            'credential' => 'getCredential',
            'dnsConf' => 'getDnsConf',
            'insecure' => 'getInsecure'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['credential'] = isset($data['credential']) ? $data['credential'] : null;
        $this->container['dnsConf'] = isset($data['dnsConf']) ? $data['dnsConf'] : null;
        $this->container['insecure'] = isset($data['insecure']) ? $data['insecure'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['credential'] === null) {
            $invalidProperties[] = "'credential' can't be null";
        }
        if ($this->container['insecure'] === null) {
            $invalidProperties[] = "'insecure' can't be null";
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
    *  目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 目标仓库名称，1-64字符组成，只能包含英文大小写、数字、汉字、中划线和下划线。
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
    *  目标仓库描述
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
    * @param string|null $description 目标仓库描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
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
    * @param string $type 仓库类型，swr-pro(开源harbor仓库)、swr-pro-internal(SWR企业版仓库)、huawei-SWR(SWR共享版仓库)
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets projectId
    *  企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
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
    * @param string|null $projectId 企业仓库实例所属的项目ID，当type为swr-pro-internal时必填
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  区域ID，当type为swr-pro-internal时必填
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 区域ID，当type为swr-pro-internal时必填
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets instanceId
    *  企业仓库实例ID，当type为swr-pro-internal时必填
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 企业仓库实例ID，当type为swr-pro-internal时必填
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets url
    *  目标仓库的地址
    *
    * @return string
    */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
    * Sets url
    *
    * @param string $url 目标仓库的地址
    *
    * @return $this
    */
    public function setUrl($url)
    {
        $this->container['url'] = $url;
        return $this;
    }

    /**
    * Gets credential
    *  credential
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\Credential
    */
    public function getCredential()
    {
        return $this->container['credential'];
    }

    /**
    * Sets credential
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\Credential $credential credential
    *
    * @return $this
    */
    public function setCredential($credential)
    {
        $this->container['credential'] = $credential;
        return $this;
    }

    /**
    * Gets dnsConf
    *  dnsConf
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\DnsConf|null
    */
    public function getDnsConf()
    {
        return $this->container['dnsConf'];
    }

    /**
    * Sets dnsConf
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\DnsConf|null $dnsConf dnsConf
    *
    * @return $this
    */
    public function setDnsConf($dnsConf)
    {
        $this->container['dnsConf'] = $dnsConf;
        return $this;
    }

    /**
    * Gets insecure
    *  是否验证远程证书
    *
    * @return bool
    */
    public function getInsecure()
    {
        return $this->container['insecure'];
    }

    /**
    * Sets insecure
    *
    * @param bool $insecure 是否验证远程证书
    *
    * @return $this
    */
    public function setInsecure($insecure)
    {
        $this->container['insecure'] = $insecure;
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

