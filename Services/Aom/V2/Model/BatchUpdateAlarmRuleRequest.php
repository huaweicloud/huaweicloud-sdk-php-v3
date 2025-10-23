<?php

namespace HuaweiCloud\SDK\Aom\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchUpdateAlarmRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchUpdateAlarmRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'enterpriseProjectId' => 'string',
            'body' => '\HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    * body  body
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'enterpriseProjectId' => null,
        'body' => null
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
    * action  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    * body  body
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'enterpriseProjectId' => 'Enterprise-Project-Id',
            'body' => 'body'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    * body  body
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'body' => 'setBody'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    * enterpriseProjectId  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    * body  body
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'body' => 'getBody'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
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
    * Gets action
    *  批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action 批量操作action：  - enable：批量启动Prometheus监控告警规则 - disable：批量停止Prometheus监控告警规则 - BATCH_UPDATE_ACTION_RULE：批量修改Prometheus监控告警规则的告警行动规则
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
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
    * @param string|null $enterpriseProjectId 企业项目id。获取方式请参见：[获取企业项目ID](aom_04_0024.xml) 。 - 批量启停或批量修改单个企业项目下实例，填写企业项目id。  - 不填 则批量启停或批量修改默认企业项目下实例，默认企业项目id为0。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets body
    *  body
    *
    * @return \HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateRequest|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param \HuaweiCloud\SDK\Aom\V2\Model\BatchUpdateRequest|null $body body
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
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

