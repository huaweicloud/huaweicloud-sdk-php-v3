<?php

namespace HuaweiCloud\SDK\Ces\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    * relationIds  **参数解释** 企业项目ID列表。
    * groupId  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    * instanceStatistics  instanceStatistics
    * status  status
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * resources  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupName' => 'string',
            'type' => 'string',
            'relationIds' => 'string[]',
            'groupId' => 'string',
            'createTime' => 'int',
            'instanceStatistics' => '\HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics',
            'status' => '\HuaweiCloud\SDK\Ces\V1\Model\StatusSchemaResp',
            'enterpriseProjectId' => 'string',
            'resources' => '\HuaweiCloud\SDK\Ces\V1\Model\Resource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupName  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    * relationIds  **参数解释** 企业项目ID列表。
    * groupId  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    * instanceStatistics  instanceStatistics
    * status  status
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * resources  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupName' => null,
        'type' => null,
        'relationIds' => null,
        'groupId' => null,
        'createTime' => 'int64',
        'instanceStatistics' => null,
        'status' => null,
        'enterpriseProjectId' => null,
        'resources' => null
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
    * groupName  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    * relationIds  **参数解释** 企业项目ID列表。
    * groupId  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    * instanceStatistics  instanceStatistics
    * status  status
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * resources  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupName' => 'group_name',
            'type' => 'type',
            'relationIds' => 'relation_ids',
            'groupId' => 'group_id',
            'createTime' => 'create_time',
            'instanceStatistics' => 'instance_statistics',
            'status' => 'status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupName  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    * relationIds  **参数解释** 企业项目ID列表。
    * groupId  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    * instanceStatistics  instanceStatistics
    * status  status
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * resources  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @var string[]
    */
    protected static $setters = [
            'groupName' => 'setGroupName',
            'type' => 'setType',
            'relationIds' => 'setRelationIds',
            'groupId' => 'setGroupId',
            'createTime' => 'setCreateTime',
            'instanceStatistics' => 'setInstanceStatistics',
            'status' => 'setStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupName  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    * type  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    * relationIds  **参数解释** 企业项目ID列表。
    * groupId  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    * createTime  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    * instanceStatistics  instanceStatistics
    * status  status
    * enterpriseProjectId  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    * resources  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @var string[]
    */
    protected static $getters = [
            'groupName' => 'getGroupName',
            'type' => 'getType',
            'relationIds' => 'getRelationIds',
            'groupId' => 'getGroupId',
            'createTime' => 'getCreateTime',
            'instanceStatistics' => 'getInstanceStatistics',
            'status' => 'getStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'resources' => 'getResources'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['relationIds'] = isset($data['relationIds']) ? $data['relationIds'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['instanceStatistics'] = isset($data['instanceStatistics']) ? $data['instanceStatistics'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 32)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12}$|0|all_granted_eps/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^([a-z]|[0-9]){8}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){4}-([a-z]|[0-9]){12}$|0|all_granted_eps/.";
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
    *  **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
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
    * @param string|null $groupName **参数解释** 资源分组名称。 **取值范围** 包含字母、数字、_、-或汉字，长度为[1,128]个字符。
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数解释** 资源添加/匹配方式。 **取值范围** 取值只能为EPS（匹配企业项目），TAG（匹配标签），NAME（匹配实例名称），COMB（组合匹配），Manual/空值（手动添加）。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets relationIds
    *  **参数解释** 企业项目ID列表。
    *
    * @return string[]|null
    */
    public function getRelationIds()
    {
        return $this->container['relationIds'];
    }

    /**
    * Sets relationIds
    *
    * @param string[]|null $relationIds **参数解释** 企业项目ID列表。
    *
    * @return $this
    */
    public function setRelationIds($relationIds)
    {
        $this->container['relationIds'] = $relationIds;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
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
    * @param string|null $groupId **参数解释**： 资源分组ID。  **取值范围**： 以rg开头，后跟22位由字母或数字组成的字符串。长度为[2,24]个字符。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
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
    * @param int|null $createTime **参数解释** 资源分组的创建时间，UNIX时间戳，单位毫秒；如：1603819753000。 **取值范围** 在[0,9223372036854775807]区间内
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets instanceStatistics
    *  instanceStatistics
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics|null
    */
    public function getInstanceStatistics()
    {
        return $this->container['instanceStatistics'];
    }

    /**
    * Sets instanceStatistics
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\InstanceStatistics|null $instanceStatistics instanceStatistics
    *
    * @return $this
    */
    public function setInstanceStatistics($instanceStatistics)
    {
        $this->container['instanceStatistics'] = $instanceStatistics;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\StatusSchemaResp|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\StatusSchemaResp|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
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
    * @param string|null $enterpriseProjectId **参数解释** 资源分组归属企业项目ID。 **取值范围** 由数字、字母和-组成，或者为0（默认企业项目ID）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets resources
    *  **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @return \HuaweiCloud\SDK\Ces\V1\Model\Resource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\Ces\V1\Model\Resource[]|null $resources **参数解释** 一组或者多个资源信息，默认为空。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

