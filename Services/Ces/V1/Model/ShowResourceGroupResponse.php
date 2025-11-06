<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowResourceGroupResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowResourceGroupResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * groupId  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    * resources  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    * status  status
    * createTime  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    * metaData  metaData
    * enterpriseProjectId  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'groupId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V1\Model\ResourceGroup[]',
            'status' => '\HuaweiCloud\SDK\Ces\V1\Model\StatusSchema',
            'createTime' => 'int',
            'metaData' => '\HuaweiCloud\SDK\Ces\V1\Model\MetaData',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * groupId  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    * resources  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    * status  status
    * createTime  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    * metaData  metaData
    * enterpriseProjectId  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'groupId' => null,
        'resources' => null,
        'status' => null,
        'createTime' => 'int64',
        'metaData' => null,
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
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * groupId  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    * resources  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    * status  status
    * createTime  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    * metaData  metaData
    * enterpriseProjectId  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'groupId' => 'group_id',
            'resources' => 'resources',
            'status' => 'status',
            'createTime' => 'create_time',
            'metaData' => 'meta_data',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * groupId  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    * resources  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    * status  status
    * createTime  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    * metaData  metaData
    * enterpriseProjectId  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'groupId' => 'setGroupId',
            'resources' => 'setResources',
            'status' => 'setStatus',
            'createTime' => 'setCreateTime',
            'metaData' => 'setMetaData',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    * groupId  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    * resources  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    * status  status
    * createTime  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    * metaData  metaData
    * enterpriseProjectId  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'groupId' => 'getGroupId',
            'resources' => 'getResources',
            'status' => 'getStatus',
            'createTime' => 'getCreateTime',
            'metaData' => 'getMetaData',
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
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
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
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 9999)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 9999)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 9999)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 9999.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
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
    * Gets groupName
    *  **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName **参数解释** 资源分组的名称 **约束限制** 不涉及 **取值范围** 只能为字母、数字、汉字、-或_，长度为[1,128]个字符 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**： 资源分组ID     **约束限制**： 不涉及。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。       **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\ResourceGroup[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\ResourceGroup[]|null $resources **参数解释** 创建的资源分组选择一个或者多个资源。 **约束限制** 不超过1000个资源。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\StatusSchema|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\StatusSchema|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime **参数解释**： 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。     **约束限制**： 不涉及。  **取值范围**： 在[1,9223372036854775807]区间内 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets metaData
    *  metaData
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\MetaData|null
    */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
    * Sets metaData
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\MetaData|null $metaData metaData
    *
    * @return $this
    */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**： 创建资源分组时关联的企业项目，默认值为0，表示企业项目为default。     **约束限制**： 不涉及。  **取值范围**： 由数字、字母和-组成，或者为0（默认企业项目ID）。 **默认取值**： 不涉及。
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

