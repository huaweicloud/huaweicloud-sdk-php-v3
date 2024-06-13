<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchAssetActionReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchAssetActionReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    * assetIds  资产ID列表
    * params  操作参数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'assetIds' => 'string[]',
            'params' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    * assetIds  资产ID列表
    * params  操作参数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'assetIds' => null,
        'params' => null
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
    * action  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    * assetIds  资产ID列表
    * params  操作参数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'assetIds' => 'asset_ids',
            'params' => 'params'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    * assetIds  资产ID列表
    * params  操作参数
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'assetIds' => 'setAssetIds',
            'params' => 'setParams'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    * assetIds  资产ID列表
    * params  操作参数
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'assetIds' => 'getAssetIds',
            'params' => 'getParams'
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
    const ACTION_DELETE = 'DELETE';
    const ACTION_DELETE_FORCE = 'DELETE_FORCE';
    const ACTION_RESTORE = 'RESTORE';
    const ACTION_UNACTIVE = 'UNACTIVE';
    const ACTION_ACTIVE = 'ACTIVE';
    const ACTION_SHARE = 'SHARE';
    const ACTION_UNSHARE = 'UNSHARE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_DELETE,
            self::ACTION_DELETE_FORCE,
            self::ACTION_RESTORE,
            self::ACTION_UNACTIVE,
            self::ACTION_ACTIVE,
            self::ACTION_SHARE,
            self::ACTION_UNSHARE,
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['assetIds'] = isset($data['assetIds']) ? $data['assetIds'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
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
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['action']) > 32)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['action']) < 0)) {
                $invalidProperties[] = "invalid value for 'action', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['assetIds'] === null) {
            $invalidProperties[] = "'assetIds' can't be null";
        }
            if (!is_null($this->container['params']) && (mb_strlen($this->container['params']) > 4096)) {
                $invalidProperties[] = "invalid value for 'params', the character length must be smaller than or equal to 4096.";
            }
            if (!is_null($this->container['params']) && (mb_strlen($this->container['params']) < 0)) {
                $invalidProperties[] = "invalid value for 'params', the character length must be bigger than or equal to 0.";
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
    *  批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
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
    * @param string $action 批量操作命令. * DELETE：删除 * DELETE_FORCE：强制删除，该模式会立即删除资产 * RESTORE：恢复 * UNACTIVE：取消激活 * ACTIVE：激活 * SHARE：共享 * UNSHARE：取消共享
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets assetIds
    *  资产ID列表
    *
    * @return string[]
    */
    public function getAssetIds()
    {
        return $this->container['assetIds'];
    }

    /**
    * Sets assetIds
    *
    * @param string[] $assetIds 资产ID列表
    *
    * @return $this
    */
    public function setAssetIds($assetIds)
    {
        $this->container['assetIds'] = $assetIds;
        return $this;
    }

    /**
    * Gets params
    *  操作参数
    *
    * @return string|null
    */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
    * Sets params
    *
    * @param string|null $params 操作参数
    *
    * @return $this
    */
    public function setParams($params)
    {
        $this->container['params'] = $params;
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

