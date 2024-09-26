<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DisassociateGlobalConnectionBandwidthInstanceResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DisassociateGlobalConnectionBandwidthInstanceResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    * resourceType  功能说明：实例类型。
    * regionId  功能说明：实例所在region，不填默认\"global\"。
    * projectId  功能说明：实例所在region对应的projectId。
    * result  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    * message  功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'resourceType' => 'string',
            'regionId' => 'string',
            'projectId' => 'string',
            'result' => 'string',
            'message' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    * resourceType  功能说明：实例类型。
    * regionId  功能说明：实例所在region，不填默认\"global\"。
    * projectId  功能说明：实例所在region对应的projectId。
    * result  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    * message  功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'resourceType' => null,
        'regionId' => null,
        'projectId' => null,
        'result' => null,
        'message' => null
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
    * resourceId  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    * resourceType  功能说明：实例类型。
    * regionId  功能说明：实例所在region，不填默认\"global\"。
    * projectId  功能说明：实例所在region对应的projectId。
    * result  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    * message  功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'resourceType' => 'resource_type',
            'regionId' => 'region_id',
            'projectId' => 'project_id',
            'result' => 'result',
            'message' => 'message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    * resourceType  功能说明：实例类型。
    * regionId  功能说明：实例所在region，不填默认\"global\"。
    * projectId  功能说明：实例所在region对应的projectId。
    * result  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    * message  功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'resourceType' => 'setResourceType',
            'regionId' => 'setRegionId',
            'projectId' => 'setProjectId',
            'result' => 'setResult',
            'message' => 'setMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    * resourceType  功能说明：实例类型。
    * regionId  功能说明：实例所在region，不填默认\"global\"。
    * projectId  功能说明：实例所在region对应的projectId。
    * result  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    * message  功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'resourceType' => 'getResourceType',
            'regionId' => 'getRegionId',
            'projectId' => 'getProjectId',
            'result' => 'getResult',
            'message' => 'getMessage'
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
    const RESULT_SUCCESS = 'success';
    const RESULT_FAIL = 'fail';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResultAllowableValues()
    {
        return [
            self::RESULT_SUCCESS,
            self::RESULT_FAIL,
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['message'] = isset($data['message']) ? $data['message'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if ((mb_strlen($this->container['resourceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 36)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-zA-Z]+$/", $this->container['resourceType'])) {
                $invalidProperties[] = "invalid value for 'resourceType', must be conform to the pattern /^[a-zA-Z]+$/.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['regionId']) && (mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionId']) && !preg_match("/^[a-zA-Z0-9_-]+$/", $this->container['regionId'])) {
                $invalidProperties[] = "invalid value for 'regionId', must be conform to the pattern /^[a-zA-Z0-9_-]+$/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^[a-fA-F0-9]{10,32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[a-fA-F0-9]{10,32}$/.";
            }
            $allowedValues = $this->getResultAllowableValues();
                if (!is_null($this->container['result']) && !in_array($this->container['result'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'result', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 4096)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) < 0)) {
                $invalidProperties[] = "invalid value for 'message', the character length must be bigger than or equal to 0.";
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
    * Gets resourceId
    *  功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 功能说明：实例ID。 取值范围：1-36个字符，支持数字、字母、_(下划线)、-（中划线）
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceType
    *  功能说明：实例类型。
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType 功能说明：实例类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets regionId
    *  功能说明：实例所在region，不填默认\"global\"。
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
    * @param string|null $regionId 功能说明：实例所在region，不填默认\"global\"。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets projectId
    *  功能说明：实例所在region对应的projectId。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 功能说明：实例所在region对应的projectId。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets result
    *  功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    *
    * @return string|null
    */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
    * Sets result
    *
    * @param string|null $result 功能说明：解绑操作成功还是失败。 - success: 成功 - fail: 失败
    *
    * @return $this
    */
    public function setResult($result)
    {
        $this->container['result'] = $result;
        return $this;
    }

    /**
    * Gets message
    *  功能说明：解绑操作如果失败，具体的错误信息。
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
    * @param string|null $message 功能说明：解绑操作如果失败，具体的错误信息。
    *
    * @return $this
    */
    public function setMessage($message)
    {
        $this->container['message'] = $message;
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

