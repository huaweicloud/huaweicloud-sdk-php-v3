<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AuditResultAdminAuditResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AuditResult_admin_audit_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * message  审核信息。
    * attachmentName  附件名称。
    * attachmentUrl  附件下载地址。
    * auditTime  操作时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'message' => 'string',
            'attachmentName' => 'string',
            'attachmentUrl' => 'string',
            'auditTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * message  审核信息。
    * attachmentName  附件名称。
    * attachmentUrl  附件下载地址。
    * auditTime  操作时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'message' => null,
        'attachmentName' => null,
        'attachmentUrl' => null,
        'auditTime' => 'int64'
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
    * message  审核信息。
    * attachmentName  附件名称。
    * attachmentUrl  附件下载地址。
    * auditTime  操作时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'message' => 'message',
            'attachmentName' => 'attachment_name',
            'attachmentUrl' => 'attachment_url',
            'auditTime' => 'audit_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * message  审核信息。
    * attachmentName  附件名称。
    * attachmentUrl  附件下载地址。
    * auditTime  操作时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'message' => 'setMessage',
            'attachmentName' => 'setAttachmentName',
            'attachmentUrl' => 'setAttachmentUrl',
            'auditTime' => 'setAuditTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * message  审核信息。
    * attachmentName  附件名称。
    * attachmentUrl  附件下载地址。
    * auditTime  操作时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'message' => 'getMessage',
            'attachmentName' => 'getAttachmentName',
            'attachmentUrl' => 'getAttachmentUrl',
            'auditTime' => 'getAuditTime'
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
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
        $this->container['attachmentName'] = isset($data['attachmentName']) ? $data['attachmentName'] : null;
        $this->container['attachmentUrl'] = isset($data['attachmentUrl']) ? $data['attachmentUrl'] : null;
        $this->container['auditTime'] = isset($data['auditTime']) ? $data['auditTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 256)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 1)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attachmentName']) && (mb_strlen($this->container['attachmentName']) > 256)) {
                $invalidProperties[] = "invalid value for 'attachmentName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['attachmentName']) && (mb_strlen($this->container['attachmentName']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachmentName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['attachmentUrl']) && (mb_strlen($this->container['attachmentUrl']) > 4096)) {
                $invalidProperties[] = "invalid value for 'attachmentUrl', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['attachmentUrl']) && (mb_strlen($this->container['attachmentUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'attachmentUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['auditTime']) && ($this->container['auditTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'auditTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['auditTime']) && ($this->container['auditTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'auditTime', must be bigger than or equal to 0.";
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
    * Gets message
    *  审核信息。
    *
    * @return string|null
    */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
    * Sets message
    *
    * @param string|null $message 审核信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
        return $this;
    }

    /**
    * Gets attachmentName
    *  附件名称。
    *
    * @return string|null
    */
    public function getAttachmentName()
    {
        return $this->container['attachmentName'];
    }

    /**
    * Sets attachmentName
    *
    * @param string|null $attachmentName 附件名称。
    *
    * @return $this
    */
    public function setAttachmentName($attachmentName)
    {
        $this->container['attachmentName'] = $attachmentName;
        return $this;
    }

    /**
    * Gets attachmentUrl
    *  附件下载地址。
    *
    * @return string|null
    */
    public function getAttachmentUrl()
    {
        return $this->container['attachmentUrl'];
    }

    /**
    * Sets attachmentUrl
    *
    * @param string|null $attachmentUrl 附件下载地址。
    *
    * @return $this
    */
    public function setAttachmentUrl($attachmentUrl)
    {
        $this->container['attachmentUrl'] = $attachmentUrl;
        return $this;
    }

    /**
    * Gets auditTime
    *  操作时间。
    *
    * @return int|null
    */
    public function getAuditTime()
    {
        return $this->container['auditTime'];
    }

    /**
    * Sets auditTime
    *
    * @param int|null $auditTime 操作时间。
    *
    * @return $this
    */
    public function setAuditTime($auditTime)
    {
        $this->container['auditTime'] = $auditTime;
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

