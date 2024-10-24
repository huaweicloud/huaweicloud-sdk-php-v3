<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CentralNetworkAttachmentSpecificationValueInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CentralNetworkAttachmentSpecificationValueInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * attachmentParentInstanceId  连接的父资源ID，这里表示企业路由器ID。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建附件的原因。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseRouterTableId' => 'string',
            'attachmentParentInstanceId' => 'string',
            'hostedCloud' => '\HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum',
            'approvedState' => '\HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum',
            'reason' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * attachmentParentInstanceId  连接的父资源ID，这里表示企业路由器ID。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建附件的原因。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseRouterTableId' => null,
        'attachmentParentInstanceId' => null,
        'hostedCloud' => null,
        'approvedState' => null,
        'reason' => null
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
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * attachmentParentInstanceId  连接的父资源ID，这里表示企业路由器ID。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建附件的原因。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseRouterTableId' => 'enterprise_router_table_id',
            'attachmentParentInstanceId' => 'attachment_parent_instance_id',
            'hostedCloud' => 'hosted_cloud',
            'approvedState' => 'approved_state',
            'reason' => 'reason'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * attachmentParentInstanceId  连接的父资源ID，这里表示企业路由器ID。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建附件的原因。
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseRouterTableId' => 'setEnterpriseRouterTableId',
            'attachmentParentInstanceId' => 'setAttachmentParentInstanceId',
            'hostedCloud' => 'setHostedCloud',
            'approvedState' => 'setApprovedState',
            'reason' => 'setReason'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseRouterTableId  企业路由器的路由表ID。
    * attachmentParentInstanceId  连接的父资源ID，这里表示企业路由器ID。
    * hostedCloud  hostedCloud
    * approvedState  approvedState
    * reason  审批拒绝创建附件的原因。
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseRouterTableId' => 'getEnterpriseRouterTableId',
            'attachmentParentInstanceId' => 'getAttachmentParentInstanceId',
            'hostedCloud' => 'getHostedCloud',
            'approvedState' => 'getApprovedState',
            'reason' => 'getReason'
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
        $this->container['enterpriseRouterTableId'] = isset($data['enterpriseRouterTableId']) ? $data['enterpriseRouterTableId'] : null;
        $this->container['attachmentParentInstanceId'] = isset($data['attachmentParentInstanceId']) ? $data['attachmentParentInstanceId'] : null;
        $this->container['hostedCloud'] = isset($data['hostedCloud']) ? $data['hostedCloud'] : null;
        $this->container['approvedState'] = isset($data['approvedState']) ? $data['approvedState'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['enterpriseRouterTableId'] === null) {
            $invalidProperties[] = "'enterpriseRouterTableId' can't be null";
        }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) > 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['enterpriseRouterTableId']) < 36)) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['enterpriseRouterTableId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseRouterTableId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['attachmentParentInstanceId']) && (mb_strlen($this->container['attachmentParentInstanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'attachmentParentInstanceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['attachmentParentInstanceId']) && (mb_strlen($this->container['attachmentParentInstanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'attachmentParentInstanceId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['attachmentParentInstanceId']) && !preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['attachmentParentInstanceId'])) {
                $invalidProperties[] = "invalid value for 'attachmentParentInstanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) > 1024)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['reason']) && (mb_strlen($this->container['reason']) < 0)) {
                $invalidProperties[] = "invalid value for 'reason', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['reason']) && !preg_match("/^[^<>]*$/", $this->container['reason'])) {
                $invalidProperties[] = "invalid value for 'reason', must be conform to the pattern /^[^<>]*$/.";
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
    * Gets enterpriseRouterTableId
    *  企业路由器的路由表ID。
    *
    * @return string
    */
    public function getEnterpriseRouterTableId()
    {
        return $this->container['enterpriseRouterTableId'];
    }

    /**
    * Sets enterpriseRouterTableId
    *
    * @param string $enterpriseRouterTableId 企业路由器的路由表ID。
    *
    * @return $this
    */
    public function setEnterpriseRouterTableId($enterpriseRouterTableId)
    {
        $this->container['enterpriseRouterTableId'] = $enterpriseRouterTableId;
        return $this;
    }

    /**
    * Gets attachmentParentInstanceId
    *  连接的父资源ID，这里表示企业路由器ID。
    *
    * @return string|null
    */
    public function getAttachmentParentInstanceId()
    {
        return $this->container['attachmentParentInstanceId'];
    }

    /**
    * Sets attachmentParentInstanceId
    *
    * @param string|null $attachmentParentInstanceId 连接的父资源ID，这里表示企业路由器ID。
    *
    * @return $this
    */
    public function setAttachmentParentInstanceId($attachmentParentInstanceId)
    {
        $this->container['attachmentParentInstanceId'] = $attachmentParentInstanceId;
        return $this;
    }

    /**
    * Gets hostedCloud
    *  hostedCloud
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum|null
    */
    public function getHostedCloud()
    {
        return $this->container['hostedCloud'];
    }

    /**
    * Sets hostedCloud
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\HostedCloudEnum|null $hostedCloud hostedCloud
    *
    * @return $this
    */
    public function setHostedCloud($hostedCloud)
    {
        $this->container['hostedCloud'] = $hostedCloud;
        return $this;
    }

    /**
    * Gets approvedState
    *  approvedState
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum|null
    */
    public function getApprovedState()
    {
        return $this->container['approvedState'];
    }

    /**
    * Sets approvedState
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\ApprovedStateEnum|null $approvedState approvedState
    *
    * @return $this
    */
    public function setApprovedState($approvedState)
    {
        $this->container['approvedState'] = $approvedState;
        return $this;
    }

    /**
    * Gets reason
    *  审批拒绝创建附件的原因。
    *
    * @return string|null
    */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
    * Sets reason
    *
    * @param string|null $reason 审批拒绝创建附件的原因。
    *
    * @return $this
    */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;
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

