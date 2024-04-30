<?php

namespace HuaweiCloud\SDK\RocketMQ\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstancesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstancesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engine  消息引擎：rocketmq。
    * name  实例名称。
    * instanceId  实例ID。
    * status  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    * includeFailure  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * exactMatchName  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * enterpriseProjectId  企业项目ID。
    * limit  当次查询返回的最大个数，默认值为10，取值范围为1~50。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engine' => 'string',
            'name' => 'string',
            'instanceId' => 'string',
            'status' => 'string',
            'includeFailure' => 'string',
            'exactMatchName' => 'string',
            'enterpriseProjectId' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engine  消息引擎：rocketmq。
    * name  实例名称。
    * instanceId  实例ID。
    * status  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    * includeFailure  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * exactMatchName  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * enterpriseProjectId  企业项目ID。
    * limit  当次查询返回的最大个数，默认值为10，取值范围为1~50。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engine' => null,
        'name' => null,
        'instanceId' => null,
        'status' => null,
        'includeFailure' => null,
        'exactMatchName' => null,
        'enterpriseProjectId' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * engine  消息引擎：rocketmq。
    * name  实例名称。
    * instanceId  实例ID。
    * status  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    * includeFailure  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * exactMatchName  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * enterpriseProjectId  企业项目ID。
    * limit  当次查询返回的最大个数，默认值为10，取值范围为1~50。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engine' => 'engine',
            'name' => 'name',
            'instanceId' => 'instance_id',
            'status' => 'status',
            'includeFailure' => 'include_failure',
            'exactMatchName' => 'exact_match_name',
            'enterpriseProjectId' => 'enterprise_project_id',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engine  消息引擎：rocketmq。
    * name  实例名称。
    * instanceId  实例ID。
    * status  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    * includeFailure  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * exactMatchName  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * enterpriseProjectId  企业项目ID。
    * limit  当次查询返回的最大个数，默认值为10，取值范围为1~50。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @var string[]
    */
    protected static $setters = [
            'engine' => 'setEngine',
            'name' => 'setName',
            'instanceId' => 'setInstanceId',
            'status' => 'setStatus',
            'includeFailure' => 'setIncludeFailure',
            'exactMatchName' => 'setExactMatchName',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engine  消息引擎：rocketmq。
    * name  实例名称。
    * instanceId  实例ID。
    * status  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    * includeFailure  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    * exactMatchName  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    * enterpriseProjectId  企业项目ID。
    * limit  当次查询返回的最大个数，默认值为10，取值范围为1~50。
    * offset  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @var string[]
    */
    protected static $getters = [
            'engine' => 'getEngine',
            'name' => 'getName',
            'instanceId' => 'getInstanceId',
            'status' => 'getStatus',
            'includeFailure' => 'getIncludeFailure',
            'exactMatchName' => 'getExactMatchName',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const ENGINE_ROCKETMQ = 'rocketmq';
    const STATUS_CREATING = 'CREATING';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_RESTARTING = 'RESTARTING';
    const STATUS_DELETING = 'DELETING';
    const STATUS_ERROR = 'ERROR';
    const STATUS_CREATEFAILED = 'CREATEFAILED';
    const STATUS_FREEZING = 'FREEZING';
    const STATUS_FROZEN = 'FROZEN';
    const STATUS_EXTENDING = 'EXTENDING';
    const STATUS_SHRINKING = 'SHRINKING';
    const STATUS_EXTENDEDFAILED = 'EXTENDEDFAILED';
    const STATUS_CONFIGURING = 'CONFIGURING';
    const STATUS_ROLLBACK = 'ROLLBACK';
    const STATUS_ROLLBACKFAILED = 'ROLLBACKFAILED';
    const STATUS_VOLUMETYPECHANGING = 'VOLUMETYPECHANGING';
    const INCLUDE_FAILURE_TRUE = 'true';
    const INCLUDE_FAILURE_FALSE = 'false';
    const EXACT_MATCH_NAME_TRUE = 'true';
    const EXACT_MATCH_NAME_FALSE = 'false';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getEngineAllowableValues()
    {
        return [
            self::ENGINE_ROCKETMQ,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATING,
            self::STATUS_RUNNING,
            self::STATUS_RESTARTING,
            self::STATUS_DELETING,
            self::STATUS_ERROR,
            self::STATUS_CREATEFAILED,
            self::STATUS_FREEZING,
            self::STATUS_FROZEN,
            self::STATUS_EXTENDING,
            self::STATUS_SHRINKING,
            self::STATUS_EXTENDEDFAILED,
            self::STATUS_CONFIGURING,
            self::STATUS_ROLLBACK,
            self::STATUS_ROLLBACKFAILED,
            self::STATUS_VOLUMETYPECHANGING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getIncludeFailureAllowableValues()
    {
        return [
            self::INCLUDE_FAILURE_TRUE,
            self::INCLUDE_FAILURE_FALSE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getExactMatchNameAllowableValues()
    {
        return [
            self::EXACT_MATCH_NAME_TRUE,
            self::EXACT_MATCH_NAME_FALSE,
        ];
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
        $this->container['engine'] = isset($data['engine']) ? $data['engine'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['includeFailure'] = isset($data['includeFailure']) ? $data['includeFailure'] : null;
        $this->container['exactMatchName'] = isset($data['exactMatchName']) ? $data['exactMatchName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engine'] === null) {
            $invalidProperties[] = "'engine' can't be null";
        }
            $allowedValues = $this->getEngineAllowableValues();
                if (!is_null($this->container['engine']) && !in_array($this->container['engine'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'engine', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getIncludeFailureAllowableValues();
                if (!is_null($this->container['includeFailure']) && !in_array($this->container['includeFailure'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'includeFailure', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getExactMatchNameAllowableValues();
                if (!is_null($this->container['exactMatchName']) && !in_array($this->container['exactMatchName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'exactMatchName', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets engine
    *  消息引擎：rocketmq。
    *
    * @return string
    */
    public function getEngine()
    {
        return $this->container['engine'];
    }

    /**
    * Sets engine
    *
    * @param string $engine 消息引擎：rocketmq。
    *
    * @return $this
    */
    public function setEngine($engine)
    {
        $this->container['engine'] = $engine;
        return $this;
    }

    /**
    * Gets name
    *  实例名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例ID。
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
    * @param string|null $instanceId 实例ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets status
    *  实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例状态，[详细状态说明请参考[实例状态说明](hrm-api-0010.xml)。](tag:hws,hws_hk,ctc,hws_eu,ocb,g42,hk_g42,tm,sbc,hk_sbc,cmcc,hk_tm)[详细状态说明请参考[实例状态说明](kafka-api-180514012.xml)。](tag:hcs)
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets includeFailure
    *  是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    *
    * @return string|null
    */
    public function getIncludeFailure()
    {
        return $this->container['includeFailure'];
    }

    /**
    * Sets includeFailure
    *
    * @param string|null $includeFailure 是否返回创建失败的实例数。  当参数值为“true”时，返回创建失败的实例数。参数值为“false”或者其他值，不返回创建失败的实例数。
    *
    * @return $this
    */
    public function setIncludeFailure($includeFailure)
    {
        $this->container['includeFailure'] = $includeFailure;
        return $this;
    }

    /**
    * Gets exactMatchName
    *  是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    *
    * @return string|null
    */
    public function getExactMatchName()
    {
        return $this->container['exactMatchName'];
    }

    /**
    * Sets exactMatchName
    *
    * @param string|null $exactMatchName 是否按照实例名称进行精确匹配查询。  默认为“false”，表示模糊匹配实例名称查询。若参数值为“true”表示按照实例名称进行精确匹配查询。
    *
    * @return $this
    */
    public function setExactMatchName($exactMatchName)
    {
        $this->container['exactMatchName'] = $exactMatchName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。
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
    * @param string|null $enterpriseProjectId 企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets limit
    *  当次查询返回的最大个数，默认值为10，取值范围为1~50。
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
    * @param int|null $limit 当次查询返回的最大个数，默认值为10，取值范围为1~50。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量，表示从此偏移量开始查询， offset大于等于0。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

