<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLogtanksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLogtanksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  每页返回的个数。
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    * enterpriseProjectId  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    * loadbalancerId  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    * logGroupId  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    * logTopicId  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'pageReverse' => 'bool',
            'enterpriseProjectId' => 'string[]',
            'id' => 'string[]',
            'loadbalancerId' => 'string[]',
            'logGroupId' => 'string[]',
            'logTopicId' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  每页返回的个数。
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    * enterpriseProjectId  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    * loadbalancerId  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    * logGroupId  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    * logTopicId  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'pageReverse' => null,
        'enterpriseProjectId' => null,
        'id' => null,
        'loadbalancerId' => null,
        'logGroupId' => null,
        'logTopicId' => null
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
    * limit  每页返回的个数。
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    * enterpriseProjectId  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    * loadbalancerId  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    * logGroupId  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    * logTopicId  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'pageReverse' => 'page_reverse',
            'enterpriseProjectId' => 'enterprise_project_id',
            'id' => 'id',
            'loadbalancerId' => 'loadbalancer_id',
            'logGroupId' => 'log_group_id',
            'logTopicId' => 'log_topic_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  每页返回的个数。
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    * enterpriseProjectId  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    * loadbalancerId  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    * logGroupId  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    * logTopicId  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'pageReverse' => 'setPageReverse',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'id' => 'setId',
            'loadbalancerId' => 'setLoadbalancerId',
            'logGroupId' => 'setLogGroupId',
            'logTopicId' => 'setLogTopicId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  每页返回的个数。
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    * enterpriseProjectId  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * id  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    * loadbalancerId  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    * logGroupId  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    * logTopicId  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'pageReverse' => 'getPageReverse',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'id' => 'getId',
            'loadbalancerId' => 'getLoadbalancerId',
            'logGroupId' => 'getLogGroupId',
            'logTopicId' => 'getLogTopicId'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['logGroupId'] = isset($data['logGroupId']) ? $data['logGroupId'] : null;
        $this->container['logTopicId'] = isset($data['logTopicId']) ? $data['logTopicId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets limit
    *  每页返回的个数。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets pageReverse
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId 企业项目ID。 支持多值查询，查询条件格式：enterprise_project_id=xxx&enterprise_project_id=xxx。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets id
    *  云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id 云日志记录ID。 支持多值查询，查询条件格式：id=xxx&id=xxx。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    *
    * @return string[]|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string[]|null $loadbalancerId 负载均衡器ID。 支持多值查询，查询条件格式：loadbalancer_id=xxx&loadbalancer_id=xxx。
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets logGroupId
    *  云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    *
    * @return string[]|null
    */
    public function getLogGroupId()
    {
        return $this->container['logGroupId'];
    }

    /**
    * Sets logGroupId
    *
    * @param string[]|null $logGroupId 云日志分组ID。 支持多值查询，查询条件格式：log_group_id=xxx&log_group_id=xxx。
    *
    * @return $this
    */
    public function setLogGroupId($logGroupId)
    {
        $this->container['logGroupId'] = $logGroupId;
        return $this;
    }

    /**
    * Gets logTopicId
    *  云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @return string[]|null
    */
    public function getLogTopicId()
    {
        return $this->container['logTopicId'];
    }

    /**
    * Sets logTopicId
    *
    * @param string[]|null $logTopicId 云日志主题ID 支持多值查询，查询条件格式：log_topic_id=xxx&log_topic_id=xxx。
    *
    * @return $this
    */
    public function setLogTopicId($logTopicId)
    {
        $this->container['logTopicId'] = $logTopicId;
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

