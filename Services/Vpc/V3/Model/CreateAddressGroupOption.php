<?php

namespace HuaweiCloud\SDK\Vpc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAddressGroupOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAddressGroupOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * enterpriseProjectId  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * ipExtraSet  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'ipVersion' => 'int',
            'ipSet' => 'string[]',
            'maxCapacity' => 'int',
            'enterpriseProjectId' => 'string',
            'ipExtraSet' => '\HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * enterpriseProjectId  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * ipExtraSet  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'ipVersion' => 'int32',
        'ipSet' => null,
        'maxCapacity' => 'int32',
        'enterpriseProjectId' => null,
        'ipExtraSet' => null
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
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * enterpriseProjectId  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * ipExtraSet  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'ipVersion' => 'ip_version',
            'ipSet' => 'ip_set',
            'maxCapacity' => 'max_capacity',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipExtraSet' => 'ip_extra_set'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * enterpriseProjectId  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * ipExtraSet  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'ipVersion' => 'setIpVersion',
            'ipSet' => 'setIpSet',
            'maxCapacity' => 'setMaxCapacity',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipExtraSet' => 'setIpExtraSet'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * description  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    * ipVersion  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    * ipSet  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    * maxCapacity  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    * enterpriseProjectId  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    * ipExtraSet  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'ipVersion' => 'getIpVersion',
            'ipSet' => 'getIpSet',
            'maxCapacity' => 'getMaxCapacity',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipExtraSet' => 'getIpExtraSet'
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
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['ipSet'] = isset($data['ipSet']) ? $data['ipSet'] : null;
        $this->container['maxCapacity'] = isset($data['maxCapacity']) ? $data['maxCapacity'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipExtraSet'] = isset($data['ipExtraSet']) ? $data['ipExtraSet'] : null;
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
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
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
    *  功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    * @param string $name 功能说明：地址组名称 取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
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
    *  功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
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
    * @param string|null $description 功能说明：地址组描述信息 取值范围：0-255个字符，不能包含“<”和“>”。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ipVersion
    *  功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    *
    * @return int
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param int $ipVersion 功能说明：地址组ip版本 取值范围：4, 表示ipv4地址组；6，表示ipv6地址组
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets ipSet
    *  功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return string[]|null
    */
    public function getIpSet()
    {
        return $this->container['ipSet'];
    }

    /**
    * Sets ipSet
    *
    * @param string[]|null $ipSet 功能说明：地址组可包含地址集 取值范围：可以是单个ip地址，ip地址范围，ip地址cidr 约束：当前一个地址组ip_set数量限制默认值为20，即配置的ip地址、ip地址范围或ip地址cidr的总数默认限制20
    *
    * @return $this
    */
    public function setIpSet($ipSet)
    {
        $this->container['ipSet'] = $ipSet;
        return $this;
    }

    /**
    * Gets maxCapacity
    *  功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    *
    * @return int|null
    */
    public function getMaxCapacity()
    {
        return $this->container['maxCapacity'];
    }

    /**
    * Sets maxCapacity
    *
    * @param int|null $maxCapacity 功能说明：地址组最大条目数，限制地址组可以包含的地址数量 取值范围：0-20 默认值：20
    *
    * @return $this
    */
    public function setMaxCapacity($maxCapacity)
    {
        $this->container['maxCapacity'] = $maxCapacity;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
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
    * @param string|null $enterpriseProjectId 功能说明：企业项目ID。创建IP地址组时，给IP地址组绑定企业项目ID。 取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipExtraSet
    *  功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @return \HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetOption[]|null
    */
    public function getIpExtraSet()
    {
        return $this->container['ipExtraSet'];
    }

    /**
    * Sets ipExtraSet
    *
    * @param \HuaweiCloud\SDK\Vpc\V3\Model\IpExtraSetOption[]|null $ipExtraSet 功能说明：IP地址组包含的IP列表及其备注信息 约束：ip数量限制默认20, 与ip_set参数只能二选一
    *
    * @return $this
    */
    public function setIpExtraSet($ipExtraSet)
    {
        $this->container['ipExtraSet'] = $ipExtraSet;
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

