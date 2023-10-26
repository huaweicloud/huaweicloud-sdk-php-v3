<?php

namespace HuaweiCloud\SDK\Dcs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowBackUpInfoResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowBackUpInfoResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isAdditionalBackup  是否备份
    * nodeId  节点ID
    * nodeIp  节点IP
    * nodeRole  节点角色
    * backupPeriod  备份周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isAdditionalBackup' => 'bool',
            'nodeId' => 'string',
            'nodeIp' => 'string',
            'nodeRole' => 'string',
            'backupPeriod' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isAdditionalBackup  是否备份
    * nodeId  节点ID
    * nodeIp  节点IP
    * nodeRole  节点角色
    * backupPeriod  备份周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isAdditionalBackup' => null,
        'nodeId' => null,
        'nodeIp' => null,
        'nodeRole' => null,
        'backupPeriod' => null
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
    * isAdditionalBackup  是否备份
    * nodeId  节点ID
    * nodeIp  节点IP
    * nodeRole  节点角色
    * backupPeriod  备份周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isAdditionalBackup' => 'is_additional_backup',
            'nodeId' => 'node_id',
            'nodeIp' => 'node_ip',
            'nodeRole' => 'node_role',
            'backupPeriod' => 'backup_period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isAdditionalBackup  是否备份
    * nodeId  节点ID
    * nodeIp  节点IP
    * nodeRole  节点角色
    * backupPeriod  备份周期
    *
    * @var string[]
    */
    protected static $setters = [
            'isAdditionalBackup' => 'setIsAdditionalBackup',
            'nodeId' => 'setNodeId',
            'nodeIp' => 'setNodeIp',
            'nodeRole' => 'setNodeRole',
            'backupPeriod' => 'setBackupPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isAdditionalBackup  是否备份
    * nodeId  节点ID
    * nodeIp  节点IP
    * nodeRole  节点角色
    * backupPeriod  备份周期
    *
    * @var string[]
    */
    protected static $getters = [
            'isAdditionalBackup' => 'getIsAdditionalBackup',
            'nodeId' => 'getNodeId',
            'nodeIp' => 'getNodeIp',
            'nodeRole' => 'getNodeRole',
            'backupPeriod' => 'getBackupPeriod'
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
        $this->container['isAdditionalBackup'] = isset($data['isAdditionalBackup']) ? $data['isAdditionalBackup'] : null;
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['nodeIp'] = isset($data['nodeIp']) ? $data['nodeIp'] : null;
        $this->container['nodeRole'] = isset($data['nodeRole']) ? $data['nodeRole'] : null;
        $this->container['backupPeriod'] = isset($data['backupPeriod']) ? $data['backupPeriod'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets isAdditionalBackup
    *  是否备份
    *
    * @return bool|null
    */
    public function getIsAdditionalBackup()
    {
        return $this->container['isAdditionalBackup'];
    }

    /**
    * Sets isAdditionalBackup
    *
    * @param bool|null $isAdditionalBackup 是否备份
    *
    * @return $this
    */
    public function setIsAdditionalBackup($isAdditionalBackup)
    {
        $this->container['isAdditionalBackup'] = $isAdditionalBackup;
        return $this;
    }

    /**
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets nodeIp
    *  节点IP
    *
    * @return string|null
    */
    public function getNodeIp()
    {
        return $this->container['nodeIp'];
    }

    /**
    * Sets nodeIp
    *
    * @param string|null $nodeIp 节点IP
    *
    * @return $this
    */
    public function setNodeIp($nodeIp)
    {
        $this->container['nodeIp'] = $nodeIp;
        return $this;
    }

    /**
    * Gets nodeRole
    *  节点角色
    *
    * @return string|null
    */
    public function getNodeRole()
    {
        return $this->container['nodeRole'];
    }

    /**
    * Sets nodeRole
    *
    * @param string|null $nodeRole 节点角色
    *
    * @return $this
    */
    public function setNodeRole($nodeRole)
    {
        $this->container['nodeRole'] = $nodeRole;
        return $this;
    }

    /**
    * Gets backupPeriod
    *  备份周期
    *
    * @return string|null
    */
    public function getBackupPeriod()
    {
        return $this->container['backupPeriod'];
    }

    /**
    * Sets backupPeriod
    *
    * @param string|null $backupPeriod 备份周期
    *
    * @return $this
    */
    public function setBackupPeriod($backupPeriod)
    {
        $this->container['backupPeriod'] = $backupPeriod;
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

