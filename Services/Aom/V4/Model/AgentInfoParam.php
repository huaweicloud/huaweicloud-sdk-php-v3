<?php

namespace HuaweiCloud\SDK\Aom\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentInfoParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentInfoParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * page  分页查询的起始页数（第几页）。默认值：1。
    * pageSize  每页查询数量，默认20。
    * ecsIdList  ecs ID列表信息。
    * agentIdList  agent ID列表信息。
    * cocCmdbIdList  cmdb  ID列表信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'page' => 'int',
            'pageSize' => 'int',
            'ecsIdList' => 'string[]',
            'agentIdList' => 'string[]',
            'cocCmdbIdList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * page  分页查询的起始页数（第几页）。默认值：1。
    * pageSize  每页查询数量，默认20。
    * ecsIdList  ecs ID列表信息。
    * agentIdList  agent ID列表信息。
    * cocCmdbIdList  cmdb  ID列表信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'page' => 'int64',
        'pageSize' => 'int64',
        'ecsIdList' => null,
        'agentIdList' => null,
        'cocCmdbIdList' => null
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
    * page  分页查询的起始页数（第几页）。默认值：1。
    * pageSize  每页查询数量，默认20。
    * ecsIdList  ecs ID列表信息。
    * agentIdList  agent ID列表信息。
    * cocCmdbIdList  cmdb  ID列表信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'page' => 'page',
            'pageSize' => 'page_size',
            'ecsIdList' => 'ecs_id_list',
            'agentIdList' => 'agent_id_list',
            'cocCmdbIdList' => 'coc_cmdb_id_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * page  分页查询的起始页数（第几页）。默认值：1。
    * pageSize  每页查询数量，默认20。
    * ecsIdList  ecs ID列表信息。
    * agentIdList  agent ID列表信息。
    * cocCmdbIdList  cmdb  ID列表信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'page' => 'setPage',
            'pageSize' => 'setPageSize',
            'ecsIdList' => 'setEcsIdList',
            'agentIdList' => 'setAgentIdList',
            'cocCmdbIdList' => 'setCocCmdbIdList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * page  分页查询的起始页数（第几页）。默认值：1。
    * pageSize  每页查询数量，默认20。
    * ecsIdList  ecs ID列表信息。
    * agentIdList  agent ID列表信息。
    * cocCmdbIdList  cmdb  ID列表信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'page' => 'getPage',
            'pageSize' => 'getPageSize',
            'ecsIdList' => 'getEcsIdList',
            'agentIdList' => 'getAgentIdList',
            'cocCmdbIdList' => 'getCocCmdbIdList'
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
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['ecsIdList'] = isset($data['ecsIdList']) ? $data['ecsIdList'] : null;
        $this->container['agentIdList'] = isset($data['agentIdList']) ? $data['agentIdList'] : null;
        $this->container['cocCmdbIdList'] = isset($data['cocCmdbIdList']) ? $data['cocCmdbIdList'] : null;
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
    * Gets page
    *  分页查询的起始页数（第几页）。默认值：1。
    *
    * @return int|null
    */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
    * Sets page
    *
    * @param int|null $page 分页查询的起始页数（第几页）。默认值：1。
    *
    * @return $this
    */
    public function setPage($page)
    {
        $this->container['page'] = $page;
        return $this;
    }

    /**
    * Gets pageSize
    *  每页查询数量，默认20。
    *
    * @return int|null
    */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /**
    * Sets pageSize
    *
    * @param int|null $pageSize 每页查询数量，默认20。
    *
    * @return $this
    */
    public function setPageSize($pageSize)
    {
        $this->container['pageSize'] = $pageSize;
        return $this;
    }

    /**
    * Gets ecsIdList
    *  ecs ID列表信息。
    *
    * @return string[]|null
    */
    public function getEcsIdList()
    {
        return $this->container['ecsIdList'];
    }

    /**
    * Sets ecsIdList
    *
    * @param string[]|null $ecsIdList ecs ID列表信息。
    *
    * @return $this
    */
    public function setEcsIdList($ecsIdList)
    {
        $this->container['ecsIdList'] = $ecsIdList;
        return $this;
    }

    /**
    * Gets agentIdList
    *  agent ID列表信息。
    *
    * @return string[]|null
    */
    public function getAgentIdList()
    {
        return $this->container['agentIdList'];
    }

    /**
    * Sets agentIdList
    *
    * @param string[]|null $agentIdList agent ID列表信息。
    *
    * @return $this
    */
    public function setAgentIdList($agentIdList)
    {
        $this->container['agentIdList'] = $agentIdList;
        return $this;
    }

    /**
    * Gets cocCmdbIdList
    *  cmdb  ID列表信息。
    *
    * @return string[]|null
    */
    public function getCocCmdbIdList()
    {
        return $this->container['cocCmdbIdList'];
    }

    /**
    * Sets cocCmdbIdList
    *
    * @param string[]|null $cocCmdbIdList cmdb  ID列表信息。
    *
    * @return $this
    */
    public function setCocCmdbIdList($cocCmdbIdList)
    {
        $this->container['cocCmdbIdList'] = $cocCmdbIdList;
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

